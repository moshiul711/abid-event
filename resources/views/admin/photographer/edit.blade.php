@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Photographer Add</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Photographer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Photographer</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg col-md-12">
            <div class="card">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-center">Ad Photographer Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal"  action="{{route('photographer.update',['id' => $photographer->id])}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Photographer Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$photographer->name}}" placeholder="Enter Photographer Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Photographer Email</label>
                            <div class="col-md-9">
                                <input class="form-control" name="email" value="{{$photographer->email}}" readonly placeholder="Enter Photographer email" type="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Photographer Mobile</label>
                            <div class="col-md-9">
                                <input class="form-control" name="mobile" value="{{$photographer->mobile}}" placeholder="Enter Photographer mobile" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Photographer address</label>
                            <div class="col-md-9">
                                <input class="form-control" name="address" value="{{$photographer->address}}" placeholder="Enter Photographer address" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Photographer Charge Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="charge" value="{{$photographer->charge}}" placeholder="Photographer charge" id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Photographer Details</label>
                            <div class="col-md-9">
                                <textarea style="height:150px" class="form-control" name="description" placeholder="Enter Photographer full details" type="text">{{$photographer->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Photographer Images</label>
                            <div class="col-md-9">
                                <img src="{{asset($photographer->image)}}" style="height: 200px">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Photographer Image </label>
                            <div class="col-md-9">
                                <input class="form-control" name="image"  placeholder="Enter Photographer Image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Photographer other Image </label>

                            <div class="col-md-9">
                                @foreach($photographer->photographerOtherImages as $photographer_other_image)
                                    <img class="py-2 px-2" height="200px" src="{{ asset($photographer_other_image->image) }}" alt="">
                                @endforeach
                                <input class="form-control" name="photographer_other_image[]" multiple type="file">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Photographer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

