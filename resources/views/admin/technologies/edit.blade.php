@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-2 text-dark my-4">
            Edit <strong class="text-dark">{{ $technology->name }}</strong> technology
        </h2>

        @include('partials.error')


        <form action="{{ route('admin.technologies.update', $technology) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('put')

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">name</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name', $technology->name) }}">
                <small>Type name</small>
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">
                Edit
            </button>


        </form>


    </div>
@endsection
