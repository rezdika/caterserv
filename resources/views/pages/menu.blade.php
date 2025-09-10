@extends('layouts.app')

@section('title', 'Our Menu - CaterServ')
@section('hero-title', 'Our Menu')

@section('content')
@include('partials.hero-section')

<!-- Menu Start -->
<div class="container-fluid menu bg-light py-6 my-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Menu</small>
            <h1 class="display-5 mb-5">Menu Makanan Terpopuler</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                        <span class="text-dark" style="width: 150px;">Semua Menu</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                        <span class="text-dark" style="width: 150px;">Breakfast</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                        <span class="text-dark" style="width: 150px;">Lunch</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                        <span class="text-dark" style="width: 150px;">Dinner</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-6" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach($menus as $menu)
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('assets/img/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>{{ $menu->name }}</h4>
                                        <h4 class="text-primary">Rp {{ number_format($menu->price, 0, ',', '.') }}</h4>
                                    </div>
                                    <p class="mb-0">{{ $menu->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-7" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($menus->where('category', 'Breakfast') as $menu)
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('assets/img/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>{{ $menu->name }}</h4>
                                        <h4 class="text-primary">Rp {{ number_format($menu->price, 0, ',', '.') }}</h4>
                                    </div>
                                    <p class="mb-0">{{ $menu->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-8" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($menus->where('category', 'Lunch') as $menu)
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('assets/img/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>{{ $menu->name }}</h4>
                                        <h4 class="text-primary">Rp {{ number_format($menu->price, 0, ',', '.') }}</h4>
                                    </div>
                                    <p class="mb-0">{{ $menu->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-9" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach($menus->where('category', 'Dinner') as $menu)
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('assets/img/' . $menu->image) }}" alt="{{ $menu->name }}" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>{{ $menu->name }}</h4>
                                        <h4 class="text-primary">Rp {{ number_format($menu->price, 0, ',', '.') }}</h4>
                                    </div>
                                    <p class="mb-0">{{ $menu->description }}</p>
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
<!-- Menu End -->
@endsection