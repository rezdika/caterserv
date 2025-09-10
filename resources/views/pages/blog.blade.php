@extends('layouts.app')

@section('title', 'Our Blog - CaterServ')
@section('hero-title', 'Our Blog')

@section('content')
@include('partials.hero-section')

<!-- Blog Start -->
<div class="container-fluid blog py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
            <h1 class="display-5 mb-5">Artikel & Tips Catering Terbaru</h1>
        </div>
        <div class="row gx-4 justify-content-center">
            @foreach($blogs as $index => $blog)
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                <div class="blog-item mb-4">
                    <div class="overflow-hidden rounded mb-3">
                        <img src="{{ asset('assets/img/' . $blog->image) }}" class="img-fluid w-100" alt="{{ $blog->title }}" style="height: 280px; object-fit: cover;">
                    </div>
                    <div class="blog-content bg-light rounded p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded px-3 py-2 me-3">
                                <small class="fw-bold">{{ $blog->created_at->format('d M') }}</small>
                            </div>
                            <small class="text-muted">By {{ $blog->author }}</small>
                        </div>
                        <h5 class="mb-3">{{ $blog->title }}</h5>
                        <p class="mb-0 text-muted">{{ Str::limit($blog->content, 120) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection