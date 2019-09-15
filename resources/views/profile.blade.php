@extends('layouts.layout')

@section('content')
    <div class="p-page__container">
        <h2>Profile</h2>

        <div class="m-profile__container">
            <h5 class="a-profile__subtitle">Name:</h5>
            <p>{{ Auth::user()-> name}}</p>
            <h5 class="a-profile__subtitle">E-Mail:</h5>
            <p>{{ Auth::user()-> email}}</p>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@endsection