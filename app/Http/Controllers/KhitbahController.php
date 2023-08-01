<?php

namespace App\Http\Controllers;

use App\Models\Khitbah;
use Illuminate\Http\Request;

class KhitbahController extends Controller
{
    public function index() {
        $data = Khitbah::all();
        $title = 'khitbah';
        return view('khitbah.khitbah', compact('data', 'title'));
    }

    public function detail($id)
    {
        $data = Khitbah::find($id);
        $title = 'detail-khitbah';
        return view('khitbah.detail', compact('data', 'title'));
    }
}
