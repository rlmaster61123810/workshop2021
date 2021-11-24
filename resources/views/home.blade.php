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

                        {{ __('You are logged in!') }}

                        <nav class="navbar navbar-light bg-light">
                            <div class="container">
                                <a class="navbar-brand" href="#">
                                    <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="20"
                                        alt="" loading="lazy" />
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
