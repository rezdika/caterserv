@extends('layouts.app')

@section('title', 'Testimonials - CaterServ')
@section('hero-title', 'Testimonials')

@section('content')
@include('partials.hero-section')

<!-- Testimonial Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
            <h1 class="display-5 mb-5">Apa Kata Pelanggan Kami!</h1>
        </div>
        <div class="row g-4">
            @foreach($testimonials as $index => $testimonial)
            <div class="col-lg-6 wow bounceInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                <div class="testimonial-item rounded bg-light p-4 h-100">
                    <div class="d-flex mb-3">
                        <img src="{{ asset('assets/img/' . $testimonial->photo) }}" class="img-fluid rounded-circle flex-shrink-0" alt="{{ $testimonial->name }}" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">{{ $testimonial->name }}</h4>
                            <p class="m-0 text-muted">{{ $testimonial->profession }}</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex mb-3">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-6 m-0">{{ $testimonial->message }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection