@extends('layouts.admin')



@section('content')
    <div class="container">
        <h2 class="fs-4 text-dark my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome {{ Auth::user()->name }}!
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Projects
                    </div>
                    <div class="card-body">
                        {{ $projects_counter }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Technologies Counter
                    </div>
                    <div class="card-body">
                        {{ $technologies_counter }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Types Counter
                    </div>
                    <div class="card-body">
                        {{ $types_counter }}
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
