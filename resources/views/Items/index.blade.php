@extends('products')

@section('content')


    <div class="container">

        <div class="row">
            <div class="box">

                <div class="col-md-3">
                    <p class="lead">Izdelki</p>
                    <div class="list-group">

                @foreach($products as $product)

                            {{--izdelek iščemo po SLUG in ne več po ID-ju--}}
                        <a href="{{route('product', $product->slug)}}" class='list-group-item'><img class="" height="62" src="{{$product->photo ? $product->photo->file : $product->photoPlaceholder()}}"   alt="">{{$product->naziv}}</a>

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
