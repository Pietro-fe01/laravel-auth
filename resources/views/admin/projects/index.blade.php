@extends('layouts.admin')

@section('content')
    <h1 class="my-3">Projects List</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project title</th>
                    <th scope="col">Customer name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->project_title }}</td>
                    <td>{{ $project->customer_name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->slug }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection