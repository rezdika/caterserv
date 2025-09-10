@extends('layouts.app')

@section('title', 'Contact Us - CaterServ')
@section('hero-title', 'Contact Us')

@section('content')
@include('partials.hero-section')


<!-- Contact Start -->
<div class="container-fluid contact py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="contact-item">
                    <h4 class="mb-4">Contact Information</h4>
                    <div class="d-flex flex-column align-items-start">
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</p>
                        <p><i class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                        <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
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
                
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control border-primary p-3" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-primary p-3" placeholder="Alamat Email" required>
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control border-primary p-3" placeholder="Subjek Pesan" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control border-primary p-3" rows="5" placeholder="Tulis pesan Anda disini..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection