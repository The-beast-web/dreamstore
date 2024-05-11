@extends('website.layout.master')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Product Categories</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Category</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="categories-page">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-cat">
                            <a href="{{ route('website.category.detail') }}">
                                <img src="{{ asset('assets/images/category/fullwidth/banner-1.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h3 class="banner-title">Women</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">18 Products</h4><!-- End .banner-subtitle -->
                                <a href="{{ route('website.category.detail') }}" class="banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-cat">
                            <a href="#">
                                <img src="{{ asset('assets/images/category/fullwidth/banner-2.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h3 class="banner-title">Men</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">12 Products</h4><!-- End .banner-subtitle -->
                                <a href="#" class="banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-cat">
                            <a href="#">
                                <img src="{{ asset('assets/images/category/fullwidth/banner-3.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h3 class="banner-title">Accessories</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">12 Products</h4><!-- End .banner-subtitle -->
                                <a href="#" class="banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .categories-page -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection