@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Edit project
                </h1>
            </div>
        </div>

        @include('partials.success')

        @include('partials.errors')

        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Title<span class="text-danger"> *</span>
                        </label>
                        <input type="text" class="form-control" id="title" name="title" required maxlength="128"
                            value="{{ old('title', $project->title) }}" placeholder="Insert title...">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Description<span class="text-danger"> *</span>
                        </label>
                        <textarea class="form-control" rows="10" id="description" name="description" required maxlength="4096"
                            placeholder="Insert description...">{{ old('description', $project->description) }}</textarea>
                    </div>

                    <div>
                        <p>
                            <strong class="text-danger">*</strong> camps are required!
                        </p>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
