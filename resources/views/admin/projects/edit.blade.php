@extends('layouts.admin')

@section('content')
    <h1 class="my-3">Editing project "{{ $project->project_title }}"</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="d-block" for="project_title" class="form-label">Title</label>
            <input type="text" id="project_title" name="project_title" class="form-control @error('project_title') is-invalid @enderror" value="{{ old('project_title', $project->project_title) }}">
            @error('project_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="d-block" for="customer_name" class="form-label">Customer name</label>
            <input type="text" id="customer_name" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" value="{{ old('customer_name', $project->customer_name) }}">
            @error('customer_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="d-block" for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">EDIT</button>
        <button type="reset" class="btn btn-secondary">RESET</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">UNDO</a>
    </form>
@endsection