
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
                        <br>
                        @if (Auth::check() )
    Welcome : <h1>{{ Auth::user()->name }}</h1> <br>
    Your email is : {{ Auth::user()->email }} <br>
    your account created at   {{ Auth::user()->created_at}}
    @else
        Your are not login
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection




