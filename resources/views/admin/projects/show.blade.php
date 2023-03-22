@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1>
                    {{ $project->title }}
                </h1>
                <h6>
                    Slug: {{ $project->slug }}
                </h6>

                <p>
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
