@extends('layouts.admin')

@section('page-title')
    Projects
@endsection

@section('content')
    <div class="my-3 d-flex align-items-center justify-content-between">
        <h1>Projects List</h1>

        @if (session('message'))
            <div class="alert alert-success mb-0">
                {{ session('message') }}
            </div>
        @endif

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
                                <li><a class="dropdown-item" href="{{ route('admin.projects.edit', $project) }}">Edit</a></li>
                            </ul>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#modal{{ $project->id }}">
                                Delete
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modal{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting project "{{ $project->project_title }}" with ID {{ $project->id }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection