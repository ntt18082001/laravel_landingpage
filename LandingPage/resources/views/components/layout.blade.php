<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

   <x-header />

   {{ $slot ?? '' }}

   <x-footer />

   <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>