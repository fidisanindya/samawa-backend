<?php

namespace App\Http\Controllers;

use App\Models\KhitbahSchedule;
use Illuminate\Http\Request;

class KhitbahScheduleController extends Controller
{
    public function index() {
        $data = KhitbahSchedule::all();
        $title = 'khitbah-schedule';
        return view('khitbah.khitbah-schedule', compact('data', 'title'));
    }

    public function detail($id)
    {
        $data = KhitbahSchedule::find($id);
        $title = 'detail';
        return view('khitbah.detail-khitbah-schedule', compact('data', 'title'));
    }
}
