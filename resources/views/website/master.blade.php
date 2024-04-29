<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AS Event Management</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/images/favicon.svg" />

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/main.css" />
</head>
<body>
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>


<header class="header navbar-area">

    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="select4">
                                        <option value="0" selected>$ USD</option>
                                        <option value="1">€ EURO</option>
                                        <option value="2">$ CAD</option>
                                        <option value="3">₹ INR</option>
                                        <option value="4">¥ CNY</option>
                                        <option value="5">৳ BDT</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="select-position">
                                    <select id="select5">
                                        <option value="0" selected>English</option>
                                        <option value="1">Español</option>
                                        <option value="2">Filipino</option>
                                        <option value="3">Français</option>
                                        <option value="4">العربية</option>
                                        <option value="5">हिन्दी</option>
                                        <option value="6">বাংলা</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
{{--                            <li><a href="{{route('contact')}}">Contact Us</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    @if(Session::get('customer_id'))
                    <div class="top-end">
                        <div class="user">
                            <i class="lni lni-user"></i>
                            Hello {{Session::get('customer_name')}}
                        </div>
                        <ul class="user-login">
                            <li>
                                <a href="{{route('customer.dashboard')}}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('customer.logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                    @else
                            <div class="top-end">
                                <ul class="user-login">
                                    <li>
                                        <a href="{{route('customer.login')}}">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="{{route('customer.register')}}">Register</a>
                                    </li>
                                </ul>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">

                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('/')}}website/assets/images/logo/logo1.png" alt="Logo">
                    </a>

                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">

                    <div class="main-menu-search">

                        <div class="navbar-search search-style-5">
                            <div class="search-input">
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline:
                                <span>(+8801615203875)</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="javascript:void(0)">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">{{ Cart::count() }}</span>
                                </a>

                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{ Cart::count() }} Items</span>
                                        <a href="{{ route('cart') }}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        @foreach(Cart::content() as $item)
                                            <li>
                                                <a href="{{ route('cart.delete',$item->rowId) }}" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img src="{{asset($item->options->image)}}" alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="product-details.html">
                                                            {{ $item->name }}
                                                        </a>
                                                    </h4>
                                                    <p class="quantity">{{ $item->qty }}x - <span class="amount">Tk. {{ number_format($item->price) }}</span></p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">Tk. {{ number_format(Cart::subtotal()) }}</span>
                                        </div>
                                        <div class="button">
                                            <a href="checkout.html" class="btn animate">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('photography')}}" aria-label="Toggle navigation">Photographer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('weeding-decoration')}}" aria-label="Toggle navigation">Weeding Decoration</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('venue')}}" aria-label="Toggle navigation">Venue</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('weeding-card')}}" aria-label="Toggle navigation">Weeding Card</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('food')}}" aria-label="Toggle navigation">Catering Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/abidsahariarsangid"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
@yield('body')
<footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{asset('/')}}website/assets/images/logo/logo2.png" alt="#">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="footer-newsletter">
                            <h4 class="title">
                                Subscribe to our Newsletter
                                <span>Get all the latest information, Service and Offers.</span>
                            </h4>
                            <div class="newsletter-form-head">
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Email address here..." type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe<span class="dir-part"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-middle">
        <div class="container">
            <div class="bottom-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-contact">
                            <h3>Get In Touch With Us</h3>
                            <p class="phone">Phone: +8801615203875</p>
                            <ul>
                                <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                            </ul>
                            <p class="mail">
                                <a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#5b282e2b2b34292f1b2833342b3c29323f2875383436"><span class="__cf_email__" data-cfemail="98ebede8e8f7eaecd8ebf0f7e8ffeaf1fcebb6fbf7f5">[email&#160;protected]</span></a>
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer our-app">
                            <h3>Our Mobile App</h3>
                            <ul class="app-btn">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-apple"></i>
                                        <span class="small-title">Download on the</span>
                                        <span class="big-title">App Store</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-play-store"></i>
                                        <span class="small-title">Download on the</span>
                                        <span class="big-title">Google Play</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                <li><a href="javascript:void(0)">Downloads</a></li>
                                <li><a href="javascript:void(0)">Sitemap</a></li>
                                <li><a href="javascript:void(0)">FAQs Page</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Shop Departments</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                <li><a href="javascript:void(0)">Headphones</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="payment-gateway">
                            <span>We Accept:</span>
                            <img src="{{asset('/')}}website/assets/images/footer/credit-cards-footer.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="copyright">
                            <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="socila">
                            <li>
                                <span>Follow Us On:</span>
                            </li>
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>


<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/assets/js/tiny-slider.js"></script>
<script src="{{asset('/')}}website/assets/js/glightbox.min.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
<script>
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth()+1;
    if (tdate <10)
    {
        tdate = '0'+tdate;
    }
    if (month < 10)
    {
        month = '0'+month;
    }
    var year = date.getUTCFullYear();

    var minDate = year + '-' + month + '-' + tdate;

    document.getElementById('minDate').setAttribute('min',minDate);

</script>
</body>
</html>

