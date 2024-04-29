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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Booking Id</th>
                                    <th>Booking Total(Taka)</th>
                                    <th>Booking Date</th>
                                    <th>Booking Status</th>
                                    <th>Payment Status</th>
                                    <th>Delivery Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->id}}</td>
                                <td>{{$booking->booking_total}}</td>
                                <td>{{$booking->booking_date}}</td>
                                <td>{{$booking->booking_status}}</td>
                                <td>{{$booking->payment_status}}</td>
                                <td>{{$booking->delivery_status}}</td>
                                <td>
                                    <a href="{{route('customer.booking-detail', ['id' => $booking->id])}}" class="btn btn-success btn-sm">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

