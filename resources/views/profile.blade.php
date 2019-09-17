@extends('layouts.layout')

@section('content')
    <div class="p-page__container">
        <h2>Profile</h2>
        <div class="o-containers__container">
            <div class="o-profile__container">
                <h5 class="a-profile__subtitle">Name:</h5>
                <p>{{ Auth::user()-> name}}</p>
                <h5 class="a-profile__subtitle">E-Mail:</h5>
                <p>{{ Auth::user()-> email}}</p>
                <div class="m-button__container">
                    <a class="a-button__logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <a class="a-button__delete" href="{{ route('user.delete') }}">Delete account</a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <div class="o-profile__container">
                <h4>Your Questions</h4>
                @foreach($questions as $question)
                <div class="m-profile__questionContainer">
                    <a href="{{ route('questions.questionDetail', $question->id) }}">
                        <p class="a-profile__projectInfo">{{ $question->content }}</p>
                    </a>
                    <a class="a-image__container" href="{{route('questions.destroy',[$question->id])}}"><img class="a-button__x" src="{{ asset('storage/images/delete.png') }}" alt="delete"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection