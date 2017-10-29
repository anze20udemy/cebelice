@extends('layouts.admin')

@section('content')


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Artikli
                    </h1>


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Slika</th>
                            <th>Naslov</th>
                            <th>Vsebina</th>
                            <th>Ustvarjen</th>
                            <th>Posodobljen</th>
                            <th>Ogled članka</th>
                            

                        </tr>
                        </thead>
                        <tbody>

                        @if($posts)

                            @foreach($posts as $post)

                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="{{route('admin.posts.edit', $post->id)}}"><img height="62" class="card-img-top" src="{{$post->photo ?$post->photo->file : $post->photoPlaceholder() }}" alt=""></td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td><a href="{{route('home.post', $post->slug)}}">Ogled članka</a></td>


                                </tr>

                            @endforeach

                        @endif

                        </tbody>
                    </table>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
@endsection
