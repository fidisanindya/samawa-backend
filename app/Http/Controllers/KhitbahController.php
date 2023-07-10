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
}
