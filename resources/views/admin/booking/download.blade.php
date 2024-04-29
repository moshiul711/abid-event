<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="4">
                <table>
                    <tr>
                        <td class="title">
                            <img
                                src="http://localhost:8080/as_event_management/public/website/assets/images/logo/logo1.png" style="width: 100%; max-width: 300px"/>
                        </td>

                        <td>
                            Invoice #: 000{{$booking->id}}<br />
                            Booking Date: {{$booking->booking_date}}<br />
                            Invoice Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <h4>Delivery Information</h4>
                            {{$booking->customer->name}}<br />
                            {{$booking->customer->mobile}}<br />
                            {{$booking->customer->email}}<br />
                            {{$booking->delivery_address}}

                        </td>

                        <td>
                            <h4>Company Information</h4>
                            Acme Corp.<br />
                            John Doe<br />
                            john@example.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Payment Method</td>

            <td colspan="3">Check #</td>
        </tr>

        <tr class="details">
            <td>{{$booking->payment_method}}</td>

            <td colspan="3">{{$booking->booking_total}}</td>
        </tr>

        <tr class="heading">
            <td>Item</td>
            <td style="text-align: center">Price</td>
            <td style="text-align: center">Quantity</td>
            <td style="text-align: right">Total Price</td>
        </tr>
        @php($sum=0)
        @foreach($booking->bookingDetail as $bookingDetail)

            <tr class="item">
                <td>{{$bookingDetail->product_name}}</td>
                <td style="text-align: center">{{$bookingDetail->product_price}}</td>
                <td style="text-align: center">{{$bookingDetail->product_qty}}</td>
                <td style="text-align: right">{{$total = $bookingDetail->product_price * $bookingDetail->product_qty}}</td>
            </tr>
            @php($sum = $sum +$total)
        @endforeach

        <tr class="total">
            <td></td>
            <td colspan="3">Sub Total: {{$sum}}</td>
        </tr>
        <tr class="total">
            <td></td>
            <td colspan="3">Tax Amount(10%): {{$booking->tax_total}}</td>
        </tr>
        <tr class="total">
            <td></td>
            <td colspan="3">Shipping Amount: {{$booking->shipping_total}}</td>
        </tr>
        <tr class="total">
            <td></td>
            <td colspan="3">Total Payable: {{$booking->booking_total}}</td>
        </tr>
    </table>
</div>
</body>
</html>
