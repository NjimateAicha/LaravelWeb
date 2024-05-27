@extends('layouts.app')

@section('content')
<style>
    .question {
        margin-bottom: 20px;
    }

    .question h4 {
        margin-bottom: 10px;
        color: #7777af;
    }

    .option {
        margin-bottom: 10px;
    }

    button[type="submit"] {
        background-color: #7777af;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 0 auto; 
    }

    button[type="submit"]:hover {
        background-color: #7777af;
    }
</style>

<form action="{{ route('quiz.calculatePHP') }}" method="post">
    @csrf
    @foreach ($questions as $questionId => $question)
    <div class="question">
        <h4>{{ $question['question'] }}</h4>
        @foreach ($question['options'] as $option)
        <div class="option">
            <input type="radio" id="option{{ $loop->parent->index }}{{ $loop->index }}" name="answers[{{ $questionId }}]" value="{{ $option }}">
            <label for="option{{ $loop->parent->index }}{{ $loop->index }}">{{ $option }}</label>
        </div>
        @endforeach
    </div>
    @endforeach
    <button type="submit">Soumettre</button>
</form>

@endsection
