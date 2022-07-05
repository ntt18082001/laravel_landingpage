<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mỹ phẩm Thu Hồng</title>
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/custom-timeline.css') }}">
   @include('include.header')
</head>

<body>

   <x-header />

   {{ $slot ?? '' }}

   <x-footer />

   <div class="position-fixed bottom-0 start-0 p-4">
      <a class="tel" href="tel:0939838027">
         <img src="{{asset('assets/img/sdt.png')}}" alt="Số điện thoại">
      </a>
   </div>

   <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>
   <script src="{{ asset('assets/js/timeline.js') }}"></script>
</body>

</html>