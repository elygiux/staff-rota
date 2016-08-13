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
        $staff = $rotaSlotStaff->all()->filter(function ($staffMember) {
            return !is_null($staffMember->staffid) && $staffMember->slottype == 'shift';
        });

        return view('index', compact('staff'));
    }
}
