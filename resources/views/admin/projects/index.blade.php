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
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-small btn-primary">Vedi
                                Progetto</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row" colspan="6" class="text-center">Non ci sono progetti</td>
                    </tr>
                @endforelse


                {{-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> --}}
            </tbody>
        </table>

    </header>
@endsection
