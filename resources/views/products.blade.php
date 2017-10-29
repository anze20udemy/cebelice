@extends('layouts.app')


@section('content')


    <div class="container">

        <div class="row">
            <div class="box">

                <div class="col-lg-3">
                    <h1 class="my-4 text-center">med</h1>
                    <div class="list-group">

                        {{--@foreach($products as $product)--}}

                            <a href="#" class="list-group-item ">Naziv</a>

                            {{--@endforeach--}}


                    </div>
                </div>
                <!-- /.col-lg-3 -->

{{--@yield('product_info')--}}
                <!-- /.col-lg-9 -->

            </div>
        </div>
    </div>

@endsection