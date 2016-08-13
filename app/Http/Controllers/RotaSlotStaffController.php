<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\RotaSlotStaffRepository;

class RotaSlotStaffController extends Controller
{
    /**
     * Display Rota slot staff table where staffId is not null and slot type is shift
     *
     * @param RotaSlotStaffRepository $rotaSlotStaff
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(RotaSlotStaffRepository $rotaSlotStaff)
    {
        $staff = $this->getStaffOfTypeShift($rotaSlotStaff);

        $staffByDay = mapByValueToArrayItem($staff, 'daynumber');
        $hoursByDay = $this->countTotalHoursByDay($staffByDay);

        return view('index', compact('staffByDay', 'hoursByDay'));
    }

    /**
     * @param RotaSlotStaffRepository $rotaSlotStaff
     * @return mixed
     */
    private function getStaffOfTypeShift(RotaSlotStaffRepository $rotaSlotStaff)
    {
        return $rotaSlotStaff->all(['staffid', 'daynumber', 'starttime', 'endtime', 'workhours', 'slottype'])->filter(function ($staffMember) {
            return !is_null($staffMember->staffid) && $staffMember->slottype == 'shift';
        })->toArray();
    }

    /**
     * Add total work hours by day to existing array
     * @param $staffByDay
     * @return array
     */
    private function countTotalHoursByDay($staffByDay)
    {
        $hoursByDay = [];
        foreach ($staffByDay as $day => $staff) {
            $totalHoursWorked = 0;
            foreach ($staff as $item) {
                $totalHoursWorked += $item['workhours'];
            }

            $hoursByDay[$day]['totalHoursWorked'] = $totalHoursWorked;
        }

        return $hoursByDay;
    }
}
