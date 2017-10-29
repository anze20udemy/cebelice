@extends('products')

@section('content')


    <div class="container">

        <div class="row">
            <div class="box">

                <div class="col-md-3">
                    <p class="lead">Izdelki</p>
                    <div class="list-group">

                        @foreach($products as $product)


                            <a href="{{route('product',$product->id )}}" class='list-group-item'>{{$product->naziv}}</a>

                        @endforeach



                    </div>


                </div>

                <div class="col-md-9">



                    {{--Specifikacija posameznega artikla--}}

                    {{--@include('.Items.product_info')--}}

                    @yield('product_info')



                </div>

            </div>

        </div>

    </div>


@endsection
