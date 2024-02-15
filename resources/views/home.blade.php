@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container text-center">
    <div class="row">
        <div class="col-12 mt-3 mb-4">
            <h2>
                Welcome to your Admin dashboard, {{ Auth::user()->name }} !
            </h2>
        </div>
    </div>
    <div class="row">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
            <a href="{{ route('admin.projects.index') }}">
              <div class="carousel-item active">
                <img src="https://brainsensei.com/wp-content/uploads/2022/06/PM-in-front-of-floating-gantt-chart.png" class="d-block w-100 position-relative" alt="...">
                <div>
                  <button class="position-absolute top-50 start-50 translate-middle btn-primary btn">Go to Projects</button>
                </div>
              </div>
            </a>
              <div class="carousel-item">
                <img src="https://retorica.net/wp-content/uploads/2017/11/html-css.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>
@endsection
