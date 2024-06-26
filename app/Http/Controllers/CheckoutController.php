<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use Cart;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Http\Controllers\SslCommerzPaymentController;

class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail, $product;
    public function index()
    {
        if(Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view('website.checkout.index',['customer' => $this->customer]);
    }

    public function newOrder(Request $request)
    {
        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = Customer::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            if(!$this->customer)
            {
                $this->customer = new Customer();
                $this->customer->name = $request->name;
                $this->customer->email = $request->email;
                $this->customer->mobile = $request->mobile;
                $this->customer->password = bcrypt($request->mobile);
                $this->customer->save();
            }
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        $this->order = new Booking();
        $this->order->customer_id = $this->customer->id;
        $this->order->booking_total =  Session::get('order_total');
        $this->order->tax_total =  Session::get('tax_total');
        $this->order->shipping_total =  0;
        $this->order->booking_date = date('Y-m-d');
        $this->order->booking_timestamp = date('Y-m-d');
        $this->order->delivery_address = $request->delivery_address;
        $this->order->payment_method = $request->payment_type;

        $this->order->transaction_id = uniqid();

        $this->order->save();

        foreach (Cart::content() as $item)
        {
            $this->orderDetail = new BookingDetail();
            $this->orderDetail->booking_id = $this->order->id;
            $this->orderDetail->product_id = $item->id;
            $this->orderDetail->product_name = $item->name;
            $this->orderDetail->product_price = $item->price;
            $this->orderDetail->product_qty = $item->qty;
            $this->orderDetail->save();

            Cart::remove($item->rowId);


        }

        if ($request->payment_type == 'cash')
        {
            $booking_total = Session::get('order_total');
            $post_data = [];
            $post_data['total_amount'] = ceil(($booking_total*0.2)); # You cant not pay less than 10
            $post_data['currency'] = "BDT";
            $post_data['tran_id'] = $this->order->transaction_id; // tran_id must be unique

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $this->customer->name;
            $post_data['cus_email'] =  $this->customer->email;
            $post_data['cus_add1'] = 'Customer Address';
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = "";
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = "Bangladesh";
            $post_data['cus_phone'] = $this->customer->mobile;
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "Store Test";
            $post_data['ship_add1'] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_phone'] = "";
            $post_data['ship_country'] = "Bangladesh";

            $post_data['shipping_method'] = "NO";
            $post_data['product_name'] = "Computer";
            $post_data['product_category'] = "Goods";
            $post_data['product_profile'] = "physical-goods";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }

        }
        else
        {
            $post_data = [];
            $post_data['total_amount'] = Session::get('order_total'); # You cant not pay less than 10
            $post_data['currency'] = "BDT";
            $post_data['tran_id'] = $this->order->transaction_id ; // tran_id must be unique

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $this->customer->name;
            $post_data['cus_email'] =  $this->customer->email;
            $post_data['cus_add1'] = 'Customer Address';
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = "";
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = "Bangladesh";
            $post_data['cus_phone'] = $this->customer->mobile;
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "Store Test";
            $post_data['ship_add1'] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_phone'] = "";
            $post_data['ship_country'] = "Bangladesh";

            $post_data['shipping_method'] = "NO";
            $post_data['product_name'] = "Computer";
            $post_data['product_category'] = "Goods";
            $post_data['product_profile'] = "physical-goods";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }
        }
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

}
