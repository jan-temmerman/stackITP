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
        <h1>StackITP</h1>
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
        <a href="{{ route('questions.questionDetail', $question->id) }}">
            <div class=o-container__question>
                <h3 class="a-text__question">{{ $question->content }}</h3>
            </div>
        </a>
        @endforeach
    </div>
</body>
</html>