@extends('layouts.app')

@section('title', 'Events - CaterServ')
@section('hero-title', 'Events')

@section('content')
@include('partials.hero-section')

<!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
            <h1 class="display-5 mb-5">Galeri Acara Sosial & Profesional Kami</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">All Events</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Wedding</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Corporate</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Cocktail</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">Buffet</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach($events as $index => $event)
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                            <div class="event-img position-relative">
                                <img class="img-fluid rounded w-100" src="{{ asset('assets/img/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="event-overlay d-flex flex-column p-4">
                                    <h4 class="me-auto">{{ $event->category }}</h4>
                                    <p class="text-white mb-2">{{ $event->title }}</p>
                                    <a href="{{ asset('assets/img/' . $event->image) }}" data-lightbox="event-{{ $event->id }}" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($events->where('category', 'Wedding') as $index => $event)
                        <div class="col-md-6 col-lg-3">
                            <div class="event-img position-relative">
                                <img class="img-fluid rounded w-100" src="{{ asset('assets/img/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="event-overlay d-flex flex-column p-4">
                                    <h4 class="me-auto">{{ $event->category }}</h4>
                                    <p class="text-white mb-2">{{ $event->title }}</p>
                                    <a href="{{ asset('assets/img/' . $event->image) }}" data-lightbox="wedding-{{ $event->id }}" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($events->where('category', 'Corporate') as $index => $event)
                        <div class="col-md-6 col-lg-3">
                            <div class="event-img position-relative">
                                <img class="img-fluid rounded w-100" src="{{ asset('assets/img/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="event-overlay d-flex flex-column p-4">
                                    <h4 class="me-auto">{{ $event->category }}</h4>
                                    <p class="text-white mb-2">{{ $event->title }}</p>
                                    <a href="{{ asset('assets/img/' . $event->image) }}" data-lightbox="corporate-{{ $event->id }}" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($events->where('category', 'Cocktail') as $index => $event)
                        <div class="col-md-6 col-lg-3">
                            <div class="event-img position-relative">
                                <img class="img-fluid rounded w-100" src="{{ asset('assets/img/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="event-overlay d-flex flex-column p-4">
                                    <h4 class="me-auto">{{ $event->category }}</h4>
                                    <p class="text-white mb-2">{{ $event->title }}</p>
                                    <a href="{{ asset('assets/img/' . $event->image) }}" data-lightbox="cocktail-{{ $event->id }}" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($events->where('category', 'Buffet') as $index => $event)
                        <div class="col-md-6 col-lg-3">
                            <div class="event-img position-relative">
                                <img class="img-fluid rounded w-100" src="{{ asset('assets/img/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="event-overlay d-flex flex-column p-4">
                                    <h4 class="me-auto">{{ $event->category }}</h4>
                                    <p class="text-white mb-2">{{ $event->title }}</p>
                                    <a href="{{ asset('assets/img/' . $event->image) }}" data-lightbox="buffet-{{ $event->id }}" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->
@endsection