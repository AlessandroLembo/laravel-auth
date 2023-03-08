{{-- Dopo aver creato un nuovo progetto nel metodo create e poi in base al fatto che esiste o meno (id) col form distinguo le route --}}
@if ($project->exists)
    <form class="row g-3" action="{{ route('admin.projects.update', $project->id) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form class="row g-3" action="{{ route('admin.projects.store') }}" method="POST" novalidate>
@endif

{{-- <form class="row g-3" action="{{ route('admin.projects.store') }}" method="POST"> --}}
@csrf
<div class="col-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}"
        required>
</div>
<div class="col-6">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" id="image" name="image"
        value="{{ old('image', $project->image) }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $project->description) }}</textarea>
</div>
<div class="mb-3">
    <label for="web_platform" class="form-label">Web platform</label>
    <textarea class="form-control" id="web_platform" rows="3" name="web_platform">{{ old('web_platform', $project->web_platform) }}</textarea>
</div>
<div class="col-6">
    <label for="project_for" class="form-label">Project_for</label>
    <input type="text" class="form-control" id="project_for" name="project_for"
        value="{{ old('project_for', $project->project_for) }}">
</div>
<div class="col-6">
    <label for="duration_project" class="form-label">Duration_project</label>
    <input type="text" class="form-control" id="duration_project" name="duration_project"
        value="{{ old('duration_project', $project->duration_project) }}">
</div>

<div class="d-flex justify-content-end">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary me-2 px-4 py-2">Back</a>
    <button type="submit" class="btn btn-success px-4 py-2">Salva</button>
</div>

</form>
