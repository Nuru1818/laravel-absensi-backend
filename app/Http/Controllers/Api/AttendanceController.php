<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //check_in
    public function checkin(Request $request){

        //validate lat and long
        $request->validate([
            'latitide' => 'required',
            'lognitude' => 'required',
        ]);

        //save new attendance
        $attendance = new Attendance;
        $attendance->user_id = $request->user()->id;
        $attendance->date = date('Y-m-d');
        $attendance->time_in = date('H:i:s');
        $attendance->latlon_in = $request->latitide . ',' . $request->lognitude;
        $attendance->save();

        return response([
            'message'       => 'Checkin success',
            'attendance'    => $attendance
        ], 200);
    }

    //checkout
    public function checkout(Request $request){
        //validate lat and long
        $request->validate([
            'latitide' => 'required',
            'lognitude' => 'required',
        ]);

        //get today attendance
        $attendance = Attendance::where('user_id', $request->user()->id)
            ->where('date', date('Y-m-d'))
            ->first();

        //check if attendance not found
        if(!$attendance) {
            return response(['message' => 'Checkin first'], 400);
        }

        //save checkout
        $attendance->time_out = date('H:i:s');
        $attendance->latlon_out = $request->latitide . ',' . $request->lognitude;
        $attendance->save();

        return response([
            'message'       => 'Checkout success',
            'attendance'    => $attendance
        ], 200);
    }
}