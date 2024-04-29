@extends('website.master')



@section('body')



    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>Cart</li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" >Order Checkout Information</h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <form action="{{route('new-order')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Full Name</label>
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            @if(isset($customer->name))
                                                                <input type="text" value="{{$customer->name}}" readonly placeholder="Full Name" name="name">
                                                            @else
                                                                <input type="text" placeholder="Full Name" name="name" required>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Email Address</label>
                                                    <div class="form-input form">
                                                        @if(isset($customer->email))
                                                            <input type="email" value="{{$customer->email}}" readonly placeholder="Email Address" name="email">
                                                        @else
                                                            <input type="email" placeholder="Email Address" name="email" required>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Phone Number</label>
                                                    <div class="form-input form">
                                                        @if(isset($customer->mobile))
                                                            <input type="number" value="{{$customer->mobile}}" readonly placeholder="Phone Number" name="mobile">
                                                        @else
                                                            <input type="number" placeholder="Phone Number" name="mobile" required>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Delivery Address</label>
                                                    <div class="form-input form">
                                                        <textarea name="delivery_address" class="pt-2" rows="3" placeholder="Delivery Address" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Payment Method</label>
                                                    <div>
                                                        <label class="me-3"><input type="radio" name="payment_type" checked value="cash"> Payment After Discussion(20% Advance on Discussion)</label>
                                                        <label><input type="radio" name="payment_type" value="online"> Online</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button class="btn" type="submit">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table">
                            <h5 class="title text-center">Shopping Cart Summery</h5>
                            <div class="sub-total-price">
                                @php($sum=0)
                                @foreach(Cart::content() as $cartItem)
                                    <div class="total-price">
                                        <p class="value">{{$cartItem->name}}  ( {{$cartItem->qty}} x {{$cartItem->price}} ) :</p>
                                        <p class="price">{{round($cartItem->subtotal)}}</p>
                                    </div>
                                    @php($sum += $cartItem->subtotal)
                                @endforeach
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">{{$sum}}</p>
                                </div>
                                <div class="payable-price">
                                    <p class="value">Tax Amount (15%):</p>
                                    <p class="price">{{round( ($tax = $sum*0.15))}}</p>
                                </div>

                                <hr>
                                <div class="payable-price">
                                    <p class="value">Total Payable:</p>
                                    <p class="price">{{round( ($totalPayable = $sum + $tax ))}}</p>
                                    <?php
                                    Session::put('order_total', round($totalPayable));
                                    Session::put('tax_total', round($tax));
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
