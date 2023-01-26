@extends('layouts.admin')

@section('page-title')
    {{ $project->project_title }}
@endsection

@section('content')
    <h1 class="text-decoration-underline my-3">{{ $project->project_title }}</h1>

    <div>
        <h3 class="m-0 mt-4">Customer:</h3>
        <h5>{{ $project->customer_name }}.</h5>
    </div>

    <div>
        <h3 class="m-0 mt-4">Description:</h3>
        <p>{{ $project->description }}</p>
    </div>

    <div class="mt-5">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Projects List</a>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success">Edit this project</a>
    </div>
@endsection