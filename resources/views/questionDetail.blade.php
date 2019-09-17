@extends('layouts.layout')

@section('content')
    <div class="p-page__container">
        <div>
            <h3>{{ $question->content }}</h3>
            <p>Question from {{ $question->user->name }}</p>
        </div>

        <form action="{{ route('questions.answer', $question->id) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="" />

            <label for="question">Your answer</label>
            <div class="m-container__input">
                <input class="a-input__text" name="answer" type="text" >
                <button class="a-button__submit" type="submit">Submit</button>
            </div>
        </form>

        <h2>Answers</h2>
        @foreach($answers as $answer)

        <?php
            $timestamp = strtotime($answer->updated_at);
            $date = date("d-m-Y", $timestamp);
        ?>

        <div class="m-container__answer">
            <h3 class="a-text__question">{{ $answer->content }}</h3>
            <p>Answer from {{ $answer->user->name }} on {{ $date }}</p>
            @if(Auth::user() && Auth::user()->id == $answer->user_id)
            <a href="{{route('questions.destroyAnswer',['id'=>$question->id, 'answer_id'=>$answer->id])}}">Delete Answer</a>
            @endif
        </div>
        @endforeach
    </div>
@endsection