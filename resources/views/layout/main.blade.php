<!DOCTYPE html>
<html>
<head>
    <title>{{trans('rota.rota_slot_staff')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
</head>
<body>
<div class="container-fluid">
    @yield('content')
</div>
</body>
<script src="{{asset('js/app.min.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
@yield('javascript')
</html>
