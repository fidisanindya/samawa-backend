<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index() {
        $data = CurriculumVitae::all();
        $title = 'cv';
        return view('cv.cv', compact('data', 'title'));
    }

    public function detail($id)
    {
        $data = CurriculumVitae::find($id);
        $title = 'detail';
        return view('cv.detail', compact('data', 'title'));
    }
}
