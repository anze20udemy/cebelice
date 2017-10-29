@extends('items.index')

@section('product_info')



        <div class="thumbnail">
            <img class="img-thumbnail center-block" height="100" src="{{$product->photo ? $product->photo->file : $product->photoPlaceholder()}}"   alt="">
            <div class='caption-full'>
                <h4 class="pull-right">{{($product->cena)}} EUR</h4>
                <h4> {{$product->naziv}}</h4><br>

            <table class="table table-responsive">


                    <tr>
                        <td>Barva</td>
                        <td>{{$product->barva}}</td>
                    </tr>
                    <tr>
                        <td>Aroma</td>
                        <td>{{$product->aroma}}</td>
                    </tr>
                    <tr>
                        <td>Okus</td>
                        <td>{{$product->okus}}</td>
                    </tr>
                    <tr>
                        <td>Kristalizacija</td>
                        <td>{{$product->kristalizacija}}</td>
                    </tr>
                    <tr>
                        <td>Čas točenja</td>
                        <td>{{$product->castocenja}}</td>
                    </tr>
                    <tr>
                        <td>Uporaba</td>
                        <td>{{$product->uporaba}}</td>
                    </tr>
                    <tr>
                        <td>Posebnosti</td>
                        <td>{{$product->posebnosti}}</td>
                    </tr>
                </table>

        </div>
        </div>

    @endsection

