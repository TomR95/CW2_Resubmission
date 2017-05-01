@extends('layouts.master')
@section('title', 'resume')
@section('content')


    <h2>My Skills</h2>
    <section>
        @if (isset ($skills))

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>Number</td>
                    <td>Question</td>
                    <td>Yes or No</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $skill->title }}</td>
                        <td>{{ $skill->detail }}</td>
                        <td>{{ $skill->stars }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        @else
            <p> No questions added yet </p>
        @endif
    </section>



    {{--<section>
        @if (isset ($skills))

            <ul>
                @foreach ($skills as $skill)
                    <li>{{ $skill->title }}</li>
                @endforeach
            </ul>
        @else
            <p> no skills added yet </p>
        @endif
    </section>--}}
@endsection