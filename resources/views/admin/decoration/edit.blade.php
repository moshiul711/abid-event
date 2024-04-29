@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Decoration Add</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Decoration</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Decoration</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-center">Ad Decoration Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal"  action="{{route('decoration.update',['id' => $decoration->id])}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Decoration Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$decoration->name}}" placeholder="Enter Decoration Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Decoration Details</label>
                            <div class="col-md-9">
                                <textarea style="height:150px" class="form-control" name="description" placeholder="Enter Decoration details" type="text">{{$decoration->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration Selling Price Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="s_price" value="{{$decoration->s_price}}" placeholder="decoration Selling price per day" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration regular Price Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="r_price" value="{{$decoration->r_price}}" placeholder="decoration regular price per day" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration Images</label>
                            <div class="col-md-9">
                                <img src="{{asset($decoration->image)}}" style="height: 200px">
                                <input class="form-control py-2" name="image" type="file">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Decoration other Image </label>

                            <div class="col-md-9">
                                @foreach($decoration->decorationOtherImages as $decoration_other_image)
                                    <img class="py-2 px-2" height="200px" src="{{ asset($decoration_other_image->image) }}" alt="">
                                @endforeach
                                <input class="form-control" name="decoration_other_image[]" multiple type="file">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Decoration</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

