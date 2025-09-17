@extends('layouts.app')

@section('title', 'About Us - CaterServ')
@section('hero-title', 'About Us')

@section('content')
@include('partials.hero-section')

<!-- About Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{ asset('assets/img/' . $about->image) }}" class="img-fluid rounded" alt="{{ $about->title }}">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                <h1 class="display-5 mb-4">{{ $about->title }}</h1>
                <p class="mb-4">{{ $about->description }}</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Makanan Segar & Pengiriman Cepat
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Dukungan Pelanggan 24/7
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Opsi Kustomisasi Mudah
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Menu Lezat dengan Harga Terjangkau
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection