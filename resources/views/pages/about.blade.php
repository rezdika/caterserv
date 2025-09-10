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

<!-- Statistics Start -->
<div class="container-fluid bg-light py-6">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded p-4">
                    <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                    <h2 class="display-5 fw-bold text-primary">{{ $about->experience_years }}+</h2>
                    <p class="fs-5 text-dark mb-0">Tahun Pengalaman</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded p-4">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h2 class="display-5 fw-bold text-primary">{{ $about->happy_clients }}+</h2>
                    <p class="fs-5 text-dark mb-0">Klien Bahagia</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-white rounded p-4">
                    <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                    <h2 class="display-5 fw-bold text-primary">{{ $about->expert_chefs }}+</h2>
                    <p class="fs-5 text-dark mb-0">Chef Ahli</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                <div class="bg-white rounded p-4">
                    <i class="fas fa-check-circle fa-3x text-primary mb-3"></i>
                    <h2 class="display-5 fw-bold text-primary">{{ $about->events_complete }}+</h2>
                    <p class="fs-5 text-dark mb-0">Acara Selesai</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Statistics End -->
@endsection