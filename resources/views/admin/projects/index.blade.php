@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <header>
        <h1 class="text-center my-5 fs-1">Projects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Poject for</th>
                    <th scope="col">Platform</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->project_for }}</td>
                        <td>{{ $project->web_platform }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-small btn-primary"><i
                                    class="fa-solid fa-eye"></i></a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                class="delete-form" data-entity="project">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-small btn-danger ms-2"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row" colspan="6" class="text-center">Non ci sono progetti</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </header>
@endsection
