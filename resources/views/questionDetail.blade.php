<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
</head>
<body>
    <div>
        <h3>{{ $question->content }}</h3>
        <p>Question from {{ $question->user->name }}</p>
    </div>

    <form action="{{ route('questions.answer', $question->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="" />

        <div >
            <div >
                <label >Answer</label>
                <div >
                    <input name="answer" type="text" >
                </div>
            </div>
            
            <div >
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    @foreach($answers as $answer)
    <div>
        <h3>{{ $answer->content }}</h3>
    </div>
    @endforeach
</body>
</html>