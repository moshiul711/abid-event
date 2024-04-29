@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Venue Add</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Venue</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Venue</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-center">Add Venue Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal"  action="{{route('venue.create')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Venue Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" placeholder="Enter Venue Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Venue address</label>
                            <div class="col-md-9">
                                <input class="form-control" name="address" placeholder="Enter Venue address" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Venue Details</label>
                            <div class="col-md-9">
                                <textarea style="height:150px" class="form-control" name="description"  id="cat_description" placeholder="Enter Venue full details" type="text"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Venue Charge Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="charge"  placeholder="Venue charge" id="cat_description" type="text">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Venue Image </label>
                            <div class="col-md-9">
                                <input class="form-control" name="image"  placeholder="Enter Venue Image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Other Images</label>
                            <div class="col-md-9">
                                <input class="form-control" name="venue_other_image[]" multiple type="file">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Venue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
