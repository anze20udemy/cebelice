@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">
    <h1>Slike</h1>

    @if($photos)

        <form action="delete/media" method="post" class="form-inline">

            {{csrf_field()}}

            {{method_field('delete')}}

            <div class="form-group">
                <select name="checkBoxArray" id="" class="form-control">

                    <option value="">Odstrani</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="delete_all" class="btn btn-primary">
            </div>

        </form>

        <table class="table">
            <thead>
            <tr>
                <th><input type="checkbox" id="options"></th>
                <th>Id</th>
                <th>Slika</th>
                <th>Ustvarjeno</th>
            </tr>
            </thead>
            <tbody>

            @foreach($photos as $photo)


                <tr>
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at->diffForHumans() :  'no date'}}</td>
                    <td>

                        <input type="hidden" name="photo" value="{{$photo->id}}">




                        <div class="form-group">

                            <input type="submit" name="delete_single" value="Odstrani" class="btn btn-danger">

                        </div>



                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        </form>
    @endif



@endsection

@section('scripts')

    <script>

        $(document).ready(function () {

            $('#options').click(function () {

                if (this.checked){

                    $('.checkBoxes').each(function(){

                        this.checked = true;

                    });

                } else {

                    $('.checkBoxes').each(function(){

                        this.checked = false;

                    });


                }



            });

        });

    </script>



@endsection

        </div> </div>