@extends('main')
@section('content')
<div class="projects">
    <nav class="navbar navbar-expand-lg projects-nav project-nav">
        <div class="collapse navbar-collapse ms-5 mt-4" id="navbarNav" >
            <ul class="nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">All</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Others</a>
                </li> --}}
            </ul>
        </div>
    </nav>
    <div class="about-details">
        <div class="container mt-4">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex flex-column">
                                <img class="card-title project-image img-fluid mb-2"
                                    src="{{ asset('images/RMIS-feedback.jpeg') }}" alt="Feedback Form (RMIS)">
                                    <a href="{{ route('feedback') }}" target="_blank" class="card-title btn btn-primary mt-3">Feedback Form (RMIS)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex flex-column">
                                <img class="card-title project-image img-fluid mb-2" src="{{ asset('images/RMIS-report.jpeg') }}"
                                    alt="">
                                <a href="{{ route('report') }}" target="_blank" class="card-title btn btn-primary mt-3">Feedback Report (RMIS)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                        <div class="card doing-card h-100">
                            <div class="card-body d-flex flex-column">
                                <img class="card-title project-image img-fluid mb-2" src="{{ asset('images/STIS-forum.png') }}"
                                    alt="">
                                <a href="{{ asset('pdf/STIS-forum.png') }}" target="_blank" class="card-title btn btn-primary mt-3">Forum (STIS)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
