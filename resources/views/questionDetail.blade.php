<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Questions</title>
</head>
<body>
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
                <input class="a-input__text" name="question" type="text" >
                <button class="a-button__submit" type="submit">Submit</button>
            </div>
        </form>

        <h2>Answers</h2>
        @foreach($answers as $answer)
        <div class=o-container__question>
            <h3 class="a-text__question">{{ $answer->content }}</h3>
        </div>
        @endforeach
    </div>
</body>
</html>