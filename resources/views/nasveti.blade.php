@extends('layouts.app')


@section('content')
    <!-- Page Content -->
    <div class="container">


        <div class="row">
            <div class="box">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

        @foreach($posts as $post)

                <!-- First Blog Post -->
                <h2>
                    <a href="{{route('nasvet', $post->slug)}}">{{$post->title}}</a>
                </h2>
                {{--<p class="lead">--}}
                    {{--Ustvaril <a href="index.php">{{$post->user->name}}</a>--}}
                {{--</p>--}}
                <p><span class="glyphicon glyphicon-time"></span> Članek ustvaril {{$post->user->name}} dne  {{$post->created_at->format('d.m.Y')}} </p>
                <hr>
                <img class="img-responsive " width="300" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="">
                <hr>
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="#">Preberi cel članek <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                @endforeach



                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Starejši</a>
                    </li>
                    <li class="next">
                        <a href="#">Novejši &rarr;</a>
                    </li>
                </ul>

            </div>



        </div>
        <!-- /.row -->
        </div>



    </div>
    <!-- /.container -->

@endsection