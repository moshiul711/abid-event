@extends('layouts.app')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Card Manage</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Card</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Card</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
             <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Card Table</h3>
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
                                <th class="border-bottom-0">Selling Price</th>
                                <th class="border-bottom-0">Regular Price</th>
                                <th class="border-bottom-0">Quantity</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach ($cards as $card)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $card->name }}</td>
                                    <td>{{ $card->description}}</td>
                                    <td>{{ $card->s_price}}</td>
                                    <td>{{ $card->r_price}}</td>
                                    <td>{{ $card->quantity}}</td>
                                    <td><img src="{{ asset( $card->image )}}" width="100"></td>
                                    <td>
                                        <a href="{{route('card.edit', ['id' => $card->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('card.delete', ['id' => $card->id])}}" onclick="return confirm('Are you sure you want to delete this card?')" class="btn btn-danger">
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
