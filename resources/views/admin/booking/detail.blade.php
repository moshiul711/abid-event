@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Booking Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Bookings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Booking Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Booking basic information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <tr>
                                <th>Booking Id</th>
                                <td>{{$booking->id}}</td>
                            </tr>
                            <tr>
                                <th>Customer Info</th>
                                <td>{{$booking->customer->name.'('.$booking->customer->mobile.')'}}</td>
                            </tr>
                            <tr>
                                <th>Booking Total</th>
                                <td>{{$booking->booking_total}}</td>
                            </tr>
                            <tr>
                                <th>Tax Total</th>
                                <td>{{$booking->tax_total}}</td>
                            </tr>
                            <tr>
                                <th>Booking Date</th>
                                <td>{{$booking->booking_date}}</td>
                            </tr>
                            <tr>
                                <th>Booking Status</th>
                                <td>{{$booking->booking_status}}</td>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <td>{{$booking->payment_method}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$booking->payment_status}}</td>
                            </tr>
                            <tr>
                                <th>Payment Amount</th>
                                <td>{{$booking->payment_amount}}</td>
                            </tr>
                            <tr>
                                <th>Currency</th>
                                <td>{{$booking->currency}}</td>
                            </tr>
                            <tr>
                                <th>Transaction Id</th>
                                <td>{{$booking->transaction_id}}</td>
                            </tr>
                            <tr>
                            <tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Booking Service information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Service Name</th>
                                <th class="border-bottom-0">Service Price</th>
                                <th class="border-bottom-0">Service quantity/Days</th>
                                <th class="border-bottom-0">Total Price</th>

                            </tr>

                            </thead>
                            <tbody>
                            @foreach ($booking->bookingDetail as $bookingDetail)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $bookingDetail->product_name}}</td>
                                    <td>{{ $bookingDetail->product_price}}</td>
                                    <td>{{ $bookingDetail->product_qty}}</td>
                                    <td>{{ $bookingDetail->product_qty * $bookingDetail->product_price}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->



@endsection
