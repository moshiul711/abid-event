@extends('website.master')

@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Customer</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href=""><i class="lni lni-home"></i> Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="{{route('customer.dashboard')}}" class="list-group-item text-muted">Dashboard</a>
                            <a href="{{route('customer.profile')}}" class="list-group-item text-muted">Profile</a>
                            <a href="{{route('customer.booking')}}" class="list-group-item text-muted">Booking</a>
                            <a href="{{route('customer.payment')}}" class="list-group-item text-muted">Payment</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item text-muted">Change Password</a>
                            <a href="{{route('customer.logout')}}" class="list-group-item text-muted">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <div class="card card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Booking Id</th>
                                    <th>{{$booking->id}}</th>
                                </tr>
                                <tr>
                                    <th>Booking Total</th>
                                    <th>{{$booking->booking_total}}</th>
                                </tr>
                                <tr>
                                    <th>Tax Total</th>
                                    <th>{{$booking->tax_total}}</th>
                                </tr>
                                <tr>
                                    <th>Shipping Total</th>
                                    <th>{{$booking->sgipping_total}}</th>
                                </tr>
                                <tr>
                                    <th>Delivery Address</th>
                                    <th>{{$booking->delivery_address}}</th>
                                </tr>
                                <tr>
                                    <th>Booking Status</th>
                                    <th>{{$booking->booking_status}}</th>
                                </tr>
                                <tr>
                                    <th>Delivery Status</th>
                                    <th>{{$booking->delivery_status}}</th>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    <th>{{$booking->payment_status}}</th>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <th>{{$booking->payment_method}}</th>
                                </tr>
                            </table>
                            <hr/>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Service/Product Name</th>
                                    <th>Service/Product Price</th>
                                    <th>Service/Product Quantity/Days</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($booking->bookingDetail as $bookingDetail)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orderDetail->product_name}}</td>
                                        <td>{{$orderDetail->product_price}}</td>
                                        <td>{{$orderDetail->product_qty}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

