@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('components.flash')
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                        <a href="/contacts/create" class="btn btn-link">Add a contact</a>

                        @include('components.alert')
                        @component('components.table', ['headers' => ['name', 'email', 'notes'], 'rows' => $contacts, 'resource' => 'contacts'])

                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
