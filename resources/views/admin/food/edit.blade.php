@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Catering Add</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Catering</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Catering</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-center">Ad Catering Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal"  action="{{route('food.update',['id' => $food->id])}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Catering Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$food->name}}" placeholder="Enter Catering Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Catering Details</label>
                            <div class="col-md-9">
                                <textarea style="height:150px" class="form-control" name="description" placeholder="Enter Catering full details" type="text">{{$food->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Catering Selling Price</label>
                            <div class="col-md-9">
                                <input class="form-control" name="s_price" value="{{$food->s_price}}" placeholder="Catering Selling Price" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Catering Regular Price</label>
                            <div class="col-md-9">
                                <input class="form-control" name="r_price" value="{{$food->r_price}}" placeholder="Catering Regular Price" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Quantity</label>
                            <div class="col-md-9">
                                <input class="form-control" name="quantity" value="{{$food->quantity}}" placeholder="Quantity" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Catering Images</label>
                            <div class="col-md-9">
                                <img src="{{asset($food->image)}}" style="height: 200px">
                                <input class="form-control py-2" name="image" type="file"><br>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Catering More Image </label>
                            <div class="col-md-9">

                                @foreach($food->foodOtherImages as $food_other_image)
                                    <img class="py-3 px-3" height="200px" src="{{ asset($food_other_image->image) }}" alt="">
                                @endforeach
                                <input class="form-control" name="food_other_image[]" multiple type="file"/>

                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Catering</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

