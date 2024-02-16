@extends('layouts.admin')

@section('title', 'Projects')

@section('main-content')

<h1 class="text-center mt-3 mb-4">
  Progetto {{ $project->title }}!
</h1>
<div class="d-flex justify-content-center">
  <img src="{{ $project->post_image }}" class="" alt="..." width="90%">
</div>
<div class="d-flex justify-content-center mb-5">
<div class="card " style="width: 90%;">
    <div class="card-body ">
      <h2 class="card-title">Project's Name: {{ $project->title }}</h2>
      <h4><span>Type: </span> {{ $project->type->name }} </h4>
      <p class="card-text">
        <div class="fw-bold mb-1">Technologies:</div> 
        @foreach ($project->technologies as $technology)
            <span class="me-2 py-2 px-3 fs-7 badge text-bg-primary"> <img src="{{ $technology->img_url }}"> {{ $technology->name }}</span>
        @endforeach
      </p>
      <h6>Author: {{ $project->author }}</h6>
      <p class="card-text">Content: {{ $project->content }}</p>
      <p>
        Date: {{ $project->date }}
      </p>
      <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
</div>

@endsection