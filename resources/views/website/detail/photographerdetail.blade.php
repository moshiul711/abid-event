@extends('website.master')


@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Personal Details</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="{{route('photography')}}">Photographer</a></li>
                    </ul>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12">
                    <p class="text-success text-center">{{session('message')}}</p>
                </div>
            </div>
        </div>
    </div>


    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="{{asset($photographer->image)}}" id="current" alt="#">
                                </div>
                                <div class="images">
                                    @foreach($photographer->photographerOtherImages as $photographer_other_image)
                                        <img src="{{ asset($photographer_other_image->image) }}" class="img" alt="#">
                                    @endforeach
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">Professional Photographer</h2>
                            <h2 class="title">{{$photographer->name}}</h2>
                            <h2 class="title">{{$photographer->email}}</h2>
                            <h2 class="title">{{$photographer->mobile}}</h2>
                            <h2 class="title">{{$photographer->address}}</h2>
                            <h3 class="price">{{$photographer->charge}}</h3>
                            <p class="info-text">{{$photographer->description}}</p>
                            <div class="row">
                                <form action="{{ route('cart.add',['id'=>$photographer->id,'type'=>$photographer->type]) }}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Available Schedule</label>
                                            <input class="form-control" type="date" id="minDate" name="photographer_schedule"/>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="color"> </label>
                                            <button type="submit" class="form-control btn btn-primary">Book Him</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
