<!-- resources/views/questions.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
    <div class="container mt-5">
        <h1>Question List</h1>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Answer A</th>
                    <th>Answer B</th>
                    <th>Answer C</th>
                </tr>
            </thead>
            <tbody>
                @foreach($localQuestions as $key => $question)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->answer_a }}</td>
                        <td>{{ $question->answer_b }}</td>
                        <td>{{ $question->answer_c }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
