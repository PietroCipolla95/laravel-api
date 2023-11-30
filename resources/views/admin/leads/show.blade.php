@extends('layouts.admin')

@section('content')
    <div class="bg-dark py-4 text-center text-light d-flex justify-content-center align-items-center">
        <a href="{{ route('admin.leads.index') }}" class="btn btn-info mx-5">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <h1>
            Message from <strong class="text-info">{{ $lead->name }}</strong>
        </h1>

    </div>

    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-8 p-5 bg-dark text-light rounded-4">
                {{ $lead->message }}
            </div>
            <div class="col-3 p-5 bg-dark text-light rounded-4">
                <h4>
                    Email
                </h4>
                <span>
                    {{ $lead->email }}
                </span>
                <h4 class="mt-4">
                    Phone
                </h4>
                <span>
                    {{ $lead->phone }}
                </span>

            </div>
        </div>
    </div>
@endsection
