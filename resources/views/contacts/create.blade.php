@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if ($method == 'create')
                        <div class="card-header">Add a Contact</div>
                    @else
                        <div class="card-header">Edit a Contact</div>
                    @endif
                    <div class="card-body">
                            @if ($method == 'create')
                                @include('contacts.createForm')
                            @else
                                @component('contacts.editForm', ['form' => $contact])
                                @endcomponent
                            @endif
                            @include('components.alert')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
