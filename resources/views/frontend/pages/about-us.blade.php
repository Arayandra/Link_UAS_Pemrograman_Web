@extends('frontend.layouts.master')

@section('title', 'E-TECH || About Us')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        @php
                            $settings = DB::table('settings')->get();
                        @endphp
                        <h3>Welcome To <span>E-Tech</span></h3>
                        <p>
                            @foreach ($settings as $data)
                                {{ $data->description }}
                            @endforeach
                        </p>
                        <div class="button">
                            <a href="{{ route('contact') }}" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-img overlay">
                        <img src="@foreach ($settings as $data) {{ $data->photo }} @endforeach"
                            alt="@foreach ($settings as $data) {{ $data->photo }} @endforeach">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section">
        <div class="container">
        </div>
    </section>
    <!-- End Shop Services Area -->

@endsection
