@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Test Page

                        @foreach ($variables as $variable)
                            <h2>User {{ $variable->id }}</h2>
                            <p>Name: {{ $variable->name }}</p>
                            <p>Email: {{ $variable->email }}</p>
                            <p>Password: {{$variable->password }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection