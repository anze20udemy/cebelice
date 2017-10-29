@extends('layouts.admin')


@section('content')
    @include('includes.tinyeditor')

    <div id="page-wrapper">

        <div class="container-fluid">

            <h1>Uredi članek</h1>



            <div class="row">
                <div class="col-sm-3">

                    <img src="{{$post->photo ?$post->photo->file :$post->photoPlaceholder() }}" alt="" class="img-responsive">

                </div>


                <div class="col-sm-9">


                    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true])!!}

                    <div class="form-group">
                        {!! Form::label('title', 'Naslov članka:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Vsebina članka:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                    </div>

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

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]])!!}


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