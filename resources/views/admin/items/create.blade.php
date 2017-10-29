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
                        Ustvari nov izdelek
                    </h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminItemsController@store', 'files'=>true])!!}

        <div class="form-group">
            {!! Form::label('naziv', 'Naziv:') !!}
            {!! Form::text('naziv', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('barva', 'Barva:') !!}
            {!! Form::text('barva', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('aroma', 'Aroma:') !!}
            {!! Form::text('aroma', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('okus', 'Okus:') !!}
            {!! Form::text('okus', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('kristalizacija', 'Kristalizacija:') !!}
            {!! Form::text('kristalizacija', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('castocenja', 'Čas Točenja:') !!}
            {!! Form::text('castocenja', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('uporaba', 'Uporaba:') !!}
            {!! Form::text('uporaba', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('posebnosti', 'Posebnosti:') !!}
            {!! Form::text('posebnosti', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cena', 'Cena:') !!}
            {!! Form::text('cena', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('pakiranje', 'Pakiranje:') !!}
            {!! Form::text('pakiranje', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Slika:') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">

         {!! Form::submit('Ustvari izdelek', ['class'=>'btn btn-primary'] ) !!}
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
