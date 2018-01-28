<html>
   <head lang="{{ app()->getLocale() }}">

     <title>retrô.</title>

     <!-- Compiled and minified CSS -->

     <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">>
     <link rel="stylesheet" href="{{asset('retro.css')}}">>
     <link rel="stylesheet" href="{{asset('retro-home.css')}}">>


     <!-- fonts -->
     <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

   </head>
   <body>
     @yield('corpo')
   </body>
</html>
