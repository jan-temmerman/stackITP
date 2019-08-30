<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
</head>
<body>
<form action="{{ route('questions.save') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="" />

                    <div >
                        <div >
                            <label >Question</label>
                            <div >
                                <input name="question" type="text" >
                            </div>
                        </div>
                       
                        <div >
                            <button type="submit">NEXT</button>
                        </div>
                    </div>
                </form>
</body>
</html>