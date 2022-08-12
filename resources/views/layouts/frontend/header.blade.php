<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="{{$descriptio ?? 'منصة صفقة دوت كوم المنصة الحرة لإتمام صفقات البيع والشراء وطلب وتقديم الخدمات مع خدمة الدفع الالكتروني وسحب الأرباح'}}">
    <meta name="keywords"    content="{{$keword ?? 'صفقة دوت كوت,صفقة,منصة صفقة , منصة صفقة دوت كوم'}}">
    <meta name="author"      content="{{$author ?? 'صفقة دوت كوم'}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'صفقة دوت كوم' }}</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/plugins/bootstrap/css/bootstrap-rtl.min.css">
    <link rel="shortcut icon" href="{{asset('frontend/assets/')}}/images/favicon.png">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/header.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/styles.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/styles-rtl.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/footer.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/login.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/auth.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/css/custome.css">
<script src="{{asset('frontend/jquery-3.5.1.min.js')}}"></script>

@yield('styles')
</head>
