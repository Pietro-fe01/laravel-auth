@extends('layouts.admin')

@section('page-title')
    New project
@endsection

@section('content')
    <h1 class="my-3">Creating new project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="d-block" for="project_title" class="form-label">Title</label>
            <input type="text" id="project_title" name="project_title" class="form-control @error('project_title') is-invalid @enderror" value="{{ old('project_title') }}">
            @error('project_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="d-block" for="customer_name" class="form-label">Customer name</label>
            <input type="text" id="customer_name" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" value="{{ old('customer_name') }}">
            @error('customer_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="d-block" for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="d-block" for="cover_image" class="form-label">Cover image</label>
            <input type="file" id="cover_image" name="cover_image" class="form-control w-50  @error('cover_image') is-invalid @enderror" onchange="loadFile(event)">
            @error('cover_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="my-4">
                <img id="output" src="" class="fluid-img w-25">
            </div>

            <script>
                var loadFile = function(event) {
                    var reader = new FileReader();
                    reader.onload = function(){
                        var output = document.getElementById('output');
                        output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                };
            </script>
        </div>

        <button type="submit" class="btn btn-success">CREATE</button>
        <button type="reset" class="btn btn-secondary">RESET</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">UNDO</a>
    </form>
@endsection