<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - create skills</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
<div class="container">
    <header class="row">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="#">Admin</a>
                    <li class="active"><a href="/">skills</a></li>
                    <li><a href="/">Home</a></li>
                    <li><a href="/resume">Resume</a></li>
                    <li><a href="/contact">Contact me</a></li>



                </ul>
            </div>
        </nav>
    </header>
    <article class="row">
        <br><br>
        <h1>Create a new question</h1>



        <!-- form goes here -->
        {!! Form::open(['url' => 'skills']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('detail', 'Detail:') !!}
            {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('stars', 'Star rating:') !!}
            {!! Form::select('stars', array('1' => '*', '2' => '**', '3' => '***', '4' => '****', '5' => '*****'), null,['placeholder' => 'Select...']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add skill', ['class' => 'btn btn-primary form-control']) !!}
        </div>


        {!! Form::close() !!}


    </article>
    <footer class="row">

    </footer>
</div><!-- close container -->

</body>
</html>