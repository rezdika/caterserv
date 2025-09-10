@extends('layouts.app')

@section('title', 'Book Now - CaterServ')
@section('hero-title', 'Book Now')

@section('content')
@include('partials.hero-section')


<!-- Book Us Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-1">
                <img src="{{ asset('assets/img/background-site.jpg') }}" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
            <div class="col-10">
                <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                    <div class="text-center">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                        <h1 class="display-5 mb-5">Where you want Our Services</h1>
                    </div>
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                  
                    <form action="{{ route('book.store') }}" method="POST">
                        @csrf
                        <div class="row g-4 form">
                            <div class="col-lg-4 col-md-6">
                                <select name="country" class="form-select border-primary p-2" required>
                                    <option value="">Pilih Negara</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Singapura">Singapura</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select name="city" class="form-select border-primary p-2" required>
                                    <option value="">Pilih Kota</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Medan">Medan</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select name="venue" class="form-select border-primary p-2" required>
                                    <option value="">Pilih Tempat</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Gedung">Gedung</option>
                                    <option value="Taman">Taman</option>
                                    <option value="Rumah">Rumah</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select name="event_type" class="form-select border-primary p-2" required>
                                    <option value="">Jenis Acara</option>
                                    <option value="small_event">Acara Kecil</option>
                                    <option value="big_event">Acara Besar</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select name="number_of_guests" class="form-select border-primary p-2" required>
                                    <option value="">Jumlah Tamu</option>
                                    <option value="100-200">100-200 Orang</option>
                                    <option value="300-400">300-400 Orang</option>
                                    <option value="500-600">500-600 Orang</option>
                                    <option value="700-800">700-800 Orang</option>
                                    <option value="900-1000">900-1000 Orang</option>
                                    <option value="1000+">1000+ Orang</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select name="food_preference" class="form-select border-primary p-2" required>
                                    <option value="">Preferensi Makanan</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="non_vegetarian">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="tel" name="contact_number" class="form-control border-primary p-2" placeholder="Nomor Telepon" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" name="event_date" class="form-control border-primary p-2" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" name="email" class="form-control border-primary p-2" placeholder="Alamat Email" required>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Kirim Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1">
                <img src="{{ asset('assets/img/background-site.jpg') }}" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Book Us End -->
@endsection