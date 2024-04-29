@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Decoration Manage</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Decoration</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Decoration</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            z      <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Decoration Table</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">Selling price per day</th>
                                <th class="border-bottom-0">Regular price per day</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach ($decorations as $decoration)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $decoration->name }}</td>
                                    <td>{{ $decoration->description}}</td>
                                    <td>{{ $decoration->s_price}}</td>
                                    <td>{{ $decoration->r_price}}</td>
                                    <td><img src="{{ asset( $decoration->image )}}" width="100"></td>
                                    <td>
                                        <a href="{{route('decoration.edit', ['id' => $decoration->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('decoration.delete', ['id' => $decoration->id])}}" onclick="return confirm('Are you sure you want to delete this decoration?')" class="btn btn-danger">
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
