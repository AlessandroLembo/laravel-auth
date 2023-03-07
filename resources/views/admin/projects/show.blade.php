@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <header class="text-center my-5 fs-1">{{ $project->name }}</header>
    <div class="row justify-content-center">
        <div class="col-6">
            @if ($project->image)
                <figure class="d-flex justify-content-center">
                    <img src="{{ $project->image }}" alt="{{ $project->name }}" class="ps-image-project">

                </figure>
            @endif

        </div>
        <div class="col-6">
            <div class="d-flex flex-column align-items-start">
                <h2>{{ $project->slug }}</h2>
                <p>{{ $project->description }}</p>
                <p class="fs-4"><strong>Progetto per:</strong> {{ $project->project_for }}</p>
                <p class="fs-4"><strong>Pubblicato su:</strong> {{ $project->web_platform }}</p>
                <p class="fs-4"><strong>Durata del progetto:</strong> {{ $project->duration_project }}</p>
            </div>
        </div>

    </div>
@endsection
