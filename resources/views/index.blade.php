@extends('layout.main')
@section('content')
    <h1 class="text-center">{{trans('rota.rota_slot_staff')}}</h1>
    <br>
    @include('rota.tables.shift-times')

    <div class="row">
        <h1 class="text-center">Staff work by day in minutes</h1>
        <br>
        @include('rota.charts.staff-charts')
    </div>
@stop
@section('javascript')
    <script>
        $(document).ready(function () {
            $.get('{{route('api.rota.staff.by.day')}}', function (rotaStaff) {
                $.each(rotaStaff, function (staffId, staff) {
                    var data = [];

                    appendStaffDivToWrapperDiv('#rota-staff-by-day', staffId);

                    $.each(staff, function (key, value) {
                        var workMinutes = floatHoursToMinutes(value.workhours);

                        data.push({
                            name: 'Day ' + value.daynumber,
                            y: workMinutes
                        });
                    });

                    createStaffPieChart(staffId, data);
                });
            });
        });
    </script>
@stop