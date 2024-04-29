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
                    <h3 class="card-title text-center">Add Decoration Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('decoration.create')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Decoration Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" placeholder="Enter Decoration Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration Details</label>
                            <div class="col-md-9">
                                <textarea style="height:150px" class="form-control" name="description"
                                          id="cat_description" placeholder="Enter Decoration full details"
                                          type="text"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration Selling Price Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="s_price" placeholder="Decoration Selling Price"
                                       id="cat_description" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Decoration Regular Price Per Day</label>
                            <div class="col-md-9">
                                <input class="form-control" name="r_price" placeholder="Decoration regular price"
                                       id="cat_description" type="text">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Decoration Image </label>
                            <div class="col-md-9">
                                <input class="form-control" name="image" placeholder="Enter Decoration Image"
                                       type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Other Images</label>
                            <div class="col-md-9">
                                <input class="form-control" name="decoration_other_image[]" multiple type="file">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Decoration</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
