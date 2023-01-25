@extends('layouts.admin')

@section('content')
    <h1 class="text-decoration-underline pt-3">{{ $project->project_title }}</h1>

    <div>
        <h3 class="m-0 mt-4">Customer:</h3>
        <h5>{{ $project->customer_name }}.</h5>
    </div>

    <div>
        <h3 class="m-0 mt-4">Description:</h3>
        <p>{{ $project->description }}</p>
    </div>

    <div>
        <h3>Site-Slug</h3>
        <span>{{ $project->slug }}</span>
    </div>
@endsection