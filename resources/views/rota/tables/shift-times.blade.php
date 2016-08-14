<table class="table table-bordered main-table table-responsive shift-times">
    <thead>
    <tr>
        <th>{{trans('rota.day')}}</th>
        <th class="visible-xs">{{trans('rota.staff_id')}}</th>
        <th class="hidden-xs">{{trans('rota.staff_and_times')}}</th>
        <th>{{trans('rota.total_hours_worked')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dayByStaff as $day => $staff)
        <tr>
            <th>
                {{intToDayOfWeek($day)}}
            </th>
            <td class="wrapper">
                <table class="table inner-table">
                    <tr>
                        @foreach($staff as $member)
                            <td>{{$member['staffid']}}
                                <small class="hidden-xs">({{$member['starttime']}}
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