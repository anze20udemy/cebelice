@include('layouts.includes.header')


<body>

@include('layouts.includes.contact_info')
@include('layouts.includes.navigation')

@yield('content')
<!-- /.container -->
@yield('widget')

@include('layouts.includes.footer')
</body>

</html>