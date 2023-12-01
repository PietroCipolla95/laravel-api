@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-2 text-dark my-4">
            Create technology
        </h2>

        @include('partials.error')


        <form action="{{ route('admin.technologies.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" name="name" id="name">
                <small>Type name</small>
            </div>

            {{-- submit button --}}
            <button type="submit" class="my_btn">
                Create
            </button>


        </form>


    </div>
@endsection
