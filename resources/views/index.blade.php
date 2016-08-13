<!DOCTYPE html>
<html>
<head>
    <title>{{trans('rota.rota_slot_staff')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
</head>
<body>
<div class="container-fluid">
    <h1 class="text-center">{{trans('rota.rota_slot_staff')}}</h1>
    <br>
    <table class="table table-bordered main-table table-responsive">
        <thead>
        <tr>
            <th>{{trans('rota.day')}}</th>
            <th>{{trans('rota.staff_and_times')}}</th>
            <th>{{trans('rota.total_worked')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($staffByDay as $day => $staff)
            <tr>
                <th>
                    {{intToDayOfWeek($day)}}
                </th>
                <td class="wrapper">
                    <table class="table inner-table">
                        <tr>
                            @foreach($staff as $member)
                                <td>{{$member['staffid']}}
                                    <small class="visible-lg-inline">({{$member['starttime']}}
                                        - {{$member['endtime']}})
                                    </small>
                                </td>
                            @endforeach
                        </tr>
                    </table>
                </td>
                <td>
                    {{$hoursByDay[$day]['totalHoursWorked']}}
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
</body>
<script src="{{asset('js/app.min.js')}}"></script>
</html>
