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
                            <th>EM</th>
                            <th>Naziv</th>
                            <th>Barva</th>
                            <th>Aroma</th>
                            <th>Okus</th>
                            <th>Kristalizacija</th>
                            <th>Uporaba</th>
                            <th>Posebnosti</th>
                            <th>Cena</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($items)

                            @foreach($items as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><a href="{{route('admin.items.edit', $item->id)}}"><img height="62" class="card-img-top" src="{{$item->photo ?$item->photo->file : $item->photoPlaceholder() }}" alt=""></td>
                                    <td>{{$item->pakiranje}}</td>
                                    <td>{{$item->naziv}}</td>
                                    <td>{{$item->barva}}</td>
                                    <td>{{$item->aroma}}</td>
                                    <td>{{$item->okus}}</td>
                                    <td>{{$item->kristalizacija}}</td>
                                    <td>{{$item->uporaba}}</td>
                                    <td>{{$item->posebnosti}}</td>
                                    <td>{{$item->cena}}</td>

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
