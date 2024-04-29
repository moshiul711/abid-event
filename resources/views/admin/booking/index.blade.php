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
                <li class="breadcrumb-item active" aria-current="page">Manage Booking</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All booking information</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Booking Id</th>
                                <th class="border-bottom-0">Customer Info</th>
                                <th class="border-bottom-0">Booking Date</th>
                                <th class="border-bottom-0">Booking Total</th>
                                <th class="border-bottom-0">Booking Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $booking->id}}</td>
                                    <td>{{ $booking->customer_name.'('.$booking->customer_mobile. ')'}}</td>
                                    <td>{{ $booking->booking_date}}</td>
                                    <td>{{ $booking->booking_total}}</td>
                                    <td>{{ $booking->booking_status}}</td>
                                    <td>
                                        <a href="{{route('admin.booking-detail', ['id' => $booking->id])}}" class="btn btn-info btn-sm" title="Booking Detail info">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>

                                        <a href="{{route('admin.booking-edit', ['id' => $booking->id])}}" class="btn btn-success btn-sm" title="Booking Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="{{route('admin.booking-invoice', ['id' => $booking->id])}}" class="btn btn-primary btn-sm" title="Booking Invoice">
                                            <i class="fa fa-book"></i>
                                        </a>

                                        <a href="{{route('admin.download-booking-invoice', ['id' => $booking->id])}}" target="_blank_" class="btn btn-warning btn-sm" title="Print Invoice">
                                            <i class="fa fa-print"></i>
                                        </a>

                                        <a href="{{route('admin.booking-delete', ['id' => $booking->id])}}" onclick="return confirm('Are you sure you want to delete this card?')" title="Delete Booking" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
    <!-- End Row -->



@endsection
