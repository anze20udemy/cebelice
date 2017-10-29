@extends('layouts.admin')

@section('styles')

    <link href="css/sb-admin.css" rel="stylesheet">
@endsection

@section('content')


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Ustvari nov članek
                    </h1>

                    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true])!!}

                    <div class="form-group">
                        {!! Form::label('title', 'Naslov:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Vsebina:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Slika:') !!}
                        {!! Form::file('photo_id',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">

                        {!! Form::submit('Ustvari članek', ['class'=>'btn btn-primary'] ) !!}
                    </div>

                    {!! Form::close()!!}






                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
@endsection
