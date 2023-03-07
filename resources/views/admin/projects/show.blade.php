@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <header class="text-center my-5 fs-1">{{ $project->name }}</header>
    <div class="row">
        <div class="col-6">
            @if ($project->image)
                <figure class="ps-image-project">
                    <img src="{{ $project->image }}" alt="{{ $project->name }}">
                </figure>
            @endif

        </div>
        <div class="col-6">
            <div class="d-flex flex-column align-items-start">
                <h2>{{ $project->slug }}</h2>
                <h4>{{ $project->description }}</h4>
                <h4>{{ $project->project_for }}</h4>
                <h4>{{ $project->web_platform }}</h4>
                <h4>{{ $project->duration_project }}</h4>
            </div>
        </div>

    </div>
@endsection
