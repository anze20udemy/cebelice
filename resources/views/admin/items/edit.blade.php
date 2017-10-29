@extends('layouts.admin')


@section('content')
    @include('includes.tinyeditor')

    <div id="page-wrapper">

        <div class="container-fluid">

    <h1>Edit Post</h1>



    <div class="row">
        <div class="col-sm-3">

            <img src="{{$item->photo ?$item->photo->file :$item->photoPlaceholder() }}" alt="" class="img-responsive">

        </div>


        <div class="col-sm-9">


            {!! Form::model($item, ['method'=>'PATCH', 'action'=>['AdminItemsController@update', $item->id], 'files'=>true])!!}

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
                {!! Form::textarea('uporaba', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('posebnosti', 'Posebnosti:') !!}
                {!! Form::textarea('posebnosti', null, ['class'=>'form-control']) !!}
            </div>
            <div class="row"></div>
            <div class="col-md-4">

            <div class="form-group">
                {!! Form::label('cena', 'Cena:') !!}
                {!! Form::text('cena', null, ['class'=>'form-control']) !!}
            </div></div>
            <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('pakiranje', 'Pakiranje:') !!}
                {!! Form::text('pakiranje', null, ['class'=>'form-control']) !!}
            </div></div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class'=>'form-control']) !!}
                </div></div>


            <div class="form-group">
                {!! Form::label('photo_id', 'Slika:') !!}
                {!! Form::file('photo_id',['class'=>'form-control']) !!}
            </div>
        </div>



            {{--<div class="form-group">--}}
                {{--{!! Form::label('photo_id', 'Photo:') !!}--}}
                {{--{!! Form::file('photo_id',['class'=>'form-control']) !!}--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--{!! Form::label('body', 'Description:') !!}--}}
                {{--{!! Form::textarea('body',null, ['class'=>'form-control']) !!}--}}
            {{--</div>--}}



            <div class="form-group">
                {!! Form::submit('UREDI', ['class'=>'btn btn-primary  col-sm-6'] ) !!}
            </div>

            {!! Form::close()!!}

            {{--DELETE--}}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminItemsController@destroy', $item->id]])!!}


            <div class="form-group">
                {!! Form::submit('ODSTRANI', ['class'=>'btn btn-danger col-sm-6'] ) !!}
            </div>

            {!! Form::close()!!}

        </div>
    </div>

    </div>
    <div class="row">

        @include('includes.form_error')

    </div>
    </div>
    </div>
@endsection