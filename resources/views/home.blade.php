@extends('layouts.meta')

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

                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Exit</button>
                        </form>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
