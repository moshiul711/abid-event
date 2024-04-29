@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Venue Manage</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Venue</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Venue</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            z      <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Venue Table</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Sl NO.</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Address</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">Charge per day</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach ($venues as $venue)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $venue->name }}</td>
                                    <td>{{ $venue->address }}</td>
                                    <td>{{ $venue->description}}</td>
                                    <td>{{ $venue->charge}}</td>
                                    <td><img src="{{ asset( $venue->image )}}" width="100"></td>
                                    <td>
                                        <a href="{{route('venue.edit', ['id' => $venue->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('venue.delete', ['id' => $venue->id])}}" onclick="return confirm('Are you sure you want to delete this venue?')" class="btn btn-danger">
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
