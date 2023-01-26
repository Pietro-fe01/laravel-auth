@extends('layouts.admin')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="my-3">Projects List</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Create new project</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project title</th>
                    <th scope="col">Customer name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
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
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Info
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('admin.projects.show', $project) }}">Show details</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection