@extends('home')
@section('content')
    <div class="resume">
        <div class="col-12  mb-4">
            <div class="container mt-4">
                <div class="container mt-4">
                    <div class="card resume-card  h-100">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            {{-- <div class="card-title">
                                <i class='bx bx-book-open task-icon fs-2 m-2 me-3'></i>
                                <span class="card-title font-weight-bold fs-3 resume-title">Education</span>
                            </div> --}}
                            <iframe src="{{ asset('pdf/Resume.pdf') }}" class="pdf-container"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
