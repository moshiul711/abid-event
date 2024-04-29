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
                <li class="breadcrumb-item active" aria-current="page">Edit Booking</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Booking Edit Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form action="{{route('admin.update-booking', ['id' =>$booking->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Booking Total</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$booking->booking_total}}" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Customer Info</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$booking->customer->name}}" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Delivery Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="delivery_address" value="{{$booking->delivery_address}}" ></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Courier Info</label>
                            <div class="col-md-9">
                                <select class="form-control" name="courier_id">
                                    <option value=""> -- Select Courier -- </option>
                                    <option value="1" {{$booking->courier_id == 1 ? 'selected' : ''}}>SA Paribahan</option>
                                    <option value="2" {{$booking->courier_id == 2 ? 'selected' : ''}}>Sundorbon Courier</option>
                                    <option value="3" {{$booking->courier_id == 3 ? 'selected' : ''}}>Redx</option>
                                    <option value="4" {{$booking->courier_id == 4 ? 'selected' : ''}}>Pathao</option>
                                    <option value="5" {{$booking->courier_id == 5 ? 'selected' : ''}}>Steedfast</option>
                                    <option value="6" {{$booking->courier_id == 6 ? 'selected' : ''}}>AJR</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Booking Status</label>
                            <div class="col-md-9">
                                <select class="form-control" required name="booking_status">
                                    <option value="" disabled selected> -- Select Booking Status -- </option>
                                    <option value="Pending" {{$booking->booking_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="Cancel" {{$booking->booking_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                    <option value="Processing" {{$booking->booking_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$booking->booking_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Update Booking Status" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->



@endsection

