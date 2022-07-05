<link rel="icon" href="{{asset('assets/img/ico.png')}}" />

@php
    $meta_image = asset('assets/img/meta_img.jpg');
    $meta_desc = "Sản phẩm được nhiều khách hàng săn đón và yêu thích vì những ưu điểm vượt bậc mà nó đem lại";
@endphp

<meta name="description" content="{{$meta_desc}}">
<meta name="og:image" content="{{$meta_image}}">
<meta name="og:type" content="landing page">
<meta name="og:image:alt" content="Diamond Rose x8">
<meta name="og:title" content="Mỹ phẩm Thu Hông">
<meta name="og:description" content="{{$meta_desc}}">