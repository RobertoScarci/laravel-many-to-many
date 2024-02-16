@extends('layouts.admin')

@section('title')
    @yield('title')
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">@yield('heading')</h1>
            </div>
            <form class="row g-3" action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <label for="title" class="form-label">Project Name</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
                </div>
                <div class="col-md-4">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $project->author) }}">
                </div>
                <div class="col-md-4">
                    <label for="type_id" class="form-label">Type</label>
                    <select class="form-select @error('type_id') is-invalid @enderror" id="type_id" name="type_id">
                        <option>Choose one type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @selected(old('type_id', $project->type_id) == $type->id )>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $project->date) }}">
                </div>
                <div class="col-md-6">
                    <label for="post_image" class="form-label">Image Url</label>
                    <input type="text" class="form-control" id="post_image" name="post_image" value="{{ old('post_image', $project->post_image) }}">
                </div>
                <div class="mb-3 input-group">
                    <img src="" alt="Image preview" class="d-none img-fluid" id="image-preview">
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $project->content) }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">@yield('buttonContent')</button>  
                </div>
            </form>
        </div>
    </div>


    <script>
        document.getElementById('post_image').addEventListener('change', function(event){
            const imageElement = document.getElementById('image-preview');
            imageElement.setAttribute('src' , this.value);
            imageElement.classList.remove('d-none');
        });
    </script>

@endsection