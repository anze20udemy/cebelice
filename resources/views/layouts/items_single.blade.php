<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Izdelek</title>

  <!-- Bootstrap core CSS -->

  <link href="{{asset('css/libs.css')}}" rel="stylesheet">

  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->

  <link href="css/business-casual.css" rel="stylesheet">


</head>

<body>
@include('layouts.includes.header')
@include('layouts.includes.contact_info')
@include('layouts.includes.navigation')

@yield('content')
<!-- /.container -->

@include('layouts.includes.footer')
</body>

</html>