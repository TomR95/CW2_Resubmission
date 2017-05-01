@extends('layouts.master')
@section('title', 'resume')
@section('content')
    <h1>Welcome to Survey Stop</h1>
    <p>Please click the questions link within the nav bar to get started.</p>
    <section>
        @if (isset ($skills))

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>Skill</td>
                    <td>Detail</td>
                    <td>Rating 0 - 5</td>
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
            <p> No skills added yet </p>
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