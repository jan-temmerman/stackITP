@extends('layouts.layout')

@section('content')
    <div class="p-page__container">
        <form action="{{ route('questions.save') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="" />

            <label>Ask a question</label>
            <div class="m-container__input">
                <input class="a-input__text" name="question" type="text" >
                <button class="a-button__submit" type="submit">Submit</button>
            </div>
        </form>
        <h2>Top Questions</h2>
        @foreach($questions as $question)
        <div class="o-container__question">
            <div id="{{ $question->id }}" class="m-container__vote">
                <div class="a-vote__up"></div>
                <p id="{{ $question->id }}p" class="a-vote__number">{{ $question->votes }}</p>
                <div class="a-vote__down"></div>
            </div>
            <a class=m-container__question href="{{ route('questions.questionDetail', $question->id) }}">
                <h3 class="a-text__question">{{ $question->content }}</h3>
                <div class="m-indicator__container">
                    <p>{{ $question->answer->count() }}</p>
                    <p>Answers</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection