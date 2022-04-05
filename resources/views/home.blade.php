@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hello {{ $user->name }} <br>
                    <hr>
                    Your info :<br>
                    Username : {{ $user->username; }}<br>
                    Email : {{ $user->email; }}<br>
                    Created : {{ $user->created_at; }}<br>
                    {{ __('You are logged in!') }}
                    Have a good day
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
