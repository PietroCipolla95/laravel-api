@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-3">
            Messages
        </h1>

        @include('partials.message')

        <div class="table-responsive my-4 rounded-3">
            <table class="table border table-striped table-hover table-light">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($leads as $lead)
                        <tr>
                            <td>
                                {{ $lead->id }}
                            </td>
                            <td>
                                {{ $lead->name }}
                            </td>
                            <td>
                                {{ $lead->phone }}
                            </td>
                            <td>
                                {{ $lead->email }}
                            </td>
                            <td>
                                {{ $lead->message }}
                            </td>
                            <td>
                                {{ $lead->created_at }}
                            </td>
                            <td>

                                <a href="{{ route('admin.leads.show', $lead->id) }}" class="btn btn-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>


                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $lead->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <!-- Modal Body -->
                                <div class="modal fade" id="modalId-{{ $lead->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitle-{{ $lead->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attention! You cannot go back from this
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <!-- Delete form -->
                                                <form action="{{ route('admin.leads.destroy', $lead->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </td>
                        </tr>
                    @empty
                        <h3 class="py-3">
                            No projects at the moment
                        </h3>
                    @endforelse



                </tbody>
            </table>
        </div>
    </div>
@endsection
