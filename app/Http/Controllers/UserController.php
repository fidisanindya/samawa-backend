<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\CurriculumVitae;
use App\Models\Khitbah;
use App\Models\KhitbahSchedule;
use App\Models\Varification;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Photo;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function curriculumVitae(Request $request)
    {
        $data = CurriculumVitae::where('user_id', auth('api')->user()->id)->get()->count();
        if ($data == 0) {
            $insert = CurriculumVitae::create([
                'user_id' => auth('api')->user()->id,
                'marital_status' => $request->marital_status,
                'marriage_prep' => $request->marriage_prep,
                'marriage_target' => $request->marriage_target,
                'vission' => $request->vission,
                'mission' => $request->mission,
                'essay' => $request->essay,
                'religion_status' => $request->religion_status,
                'mahdzab' => $request->mahdzab
            ]);
            return ApiFormatter::createApi(200, "Success", $insert);
        } else {
            $update = CurriculumVitae::where('user_id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }

    public function getUserByGender()
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        if ($gender->gender == 'Laki-laki') {
            $dataUser = User::where('gender', 'Perempuan')->get();
        } else {
            $dataUser = User::where('gender', 'Laki-laki')->get();
        }

        if ($dataUser) {
            return ApiFormatter::createApi(200, "Success", $dataUser);
        } else {
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    public function getNewUser()
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        if ($gender->gender == 'Laki-laki') {
            $dataUser = User::where('gender', 'Perempuan')->orderBy('id', 'desc')->get();
        } else {
            $dataUser = User::where('gender', 'Laki-laki')->orderBy('id', 'desc')->get();
        }

        if ($dataUser) {
            return ApiFormatter::createApi(200, "Success", $dataUser);
        } else {
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    public function biodata(Request $request)
    {
        $dataCV = CurriculumVitae::where('user_id', auth('api')->user()->id)->get()->count();
        if ($dataCV == 0) {
            $insertCV = CurriculumVitae::create([
                'user_id' => auth('api')->user()->id,
                'description' => $request->description,
                'career' => $request->career,
                'education' => $request->education,
                'hobby' => $request->hobby,
                'family_info' => $request->family_info
            ]);
            return ApiFormatter::createApi(200, "Success", $insertCV);
        } else {
            $update = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }
    public function getDetailUser()
    {
        $detailUser = User::where('id', auth('api')->user()->id)->first();
        if ($detailUser) {
            return ApiFormatter::createApi(200, "Success", $detailUser);
        } else {
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    public function userVerification(Request $request)
    {
        $data = Varification::where('user_id', auth('api')->user()->id)->get()->count();
        if ($data == 0) {
            $file = $request->file('face_with_ktp');
            $file = $file->getClientOriginalName();
            $insert = Varification::create([
                'user_id' => auth('api')->user()->id,
                'ktp' => $request->ktp,
                'face_with_ktp' => $request->face_with_ktp->move(public_path('image'), $file),
                'bornplace' => $request->bornplace,
                'bornday' => $request->bornday,
                'gender' => $request->gender,
                'marital_status' => $request->marital_status,
                'address' => $request->address,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'province' => $request->province,
                'city' => $request->city,
                'subdistrict' => $request->subdistrict,
                'urban_village' => $request->urban_village,
                'postal_code' => $request->postal_code,
            ]);
            return ApiFormatter::createApi(200, "Success", $insert);
        } else {
            $update = Varification::where('user_id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }



    public function updateProfile(Request $request)
    {
        User::where('id', auth('api')->user()->id)->update(
            [
                'name' => $request->name,
                'bornday' => $request->bornday,
                'gender' => $request->gender
            ]
        );
        CurriculumVitae::where('user_id', auth('api')->user()->id)->update([
            'marital_status' => $request->marital_status,
        ]);

        Photo::where('user_id', auth('api')->user()->id)->first();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('image'), $name);
                Photo::insert([
                    'user_id' => auth('api')->user()->id,
                    'image' =>  $name,
                ]);
            }
        }
    }

    public function khitbahSubmission(Request $request)
    {
        $insertKhitbah = Khitbah::insertGetId([
            'from' => auth('api')->user()->id,
            'to' => $request->to,
            'status' => 0
        ]);

        $insertKhitbahSchedule = KhitbahSchedule::create([
            'khitbah_id' => $insertKhitbah,
            'guardian_name' => $request->guardian_name,
            'guardian_phone' => $request->guardian_phone,
            'ustadz_id' => $request->ustadz_id,
            'notes' => $request->notes,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return ApiFormatter::createApi(200, "Success", $insertKhitbahSchedule);
    }


    public function userFavorite(Request $request)
    {
        $insertFavorite = Favorite::create([
            'from' => auth('api')->user()->id,
            'to' => $request->to,
        ]);
        return ApiFormatter::createApi(200, "Success", $insertFavorite);
    }

    public function userUnFavorite(Request $request)
    {
        $deleteFavorite = Favorite::where('id', $request->id)->delete();
        return ApiFormatter::createApi(200, "Success", $deleteFavorite);
    }

    public function getKhitbahSubmission()
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        if ($gender->gender == 'Laki-laki') {
            $getsubmission = Khitbah::with('user')->where('id', auth('api')->user()->id)->get();
            return ApiFormatter::createApi(200, "Success", $getsubmission);
        } else {
            $getsubmission = Khitbah::with('user')->where('to', $gender->id)->get();
            return ApiFormatter::createApi(200, "Success", $getsubmission);
        }
    }

    public function getSettings(Request $request)
    {
        $settings = User::where('id', auth('api')->user()->id)->first();
        return ApiFormatter::createApi(200, "Success", $settings);
    }

    public function deleteAccount(Request $request)
    {
        $account = User::where('id', auth('api')->user()->id)->first();
        if ($account) {
            $deleteAccount = User::delete([
                'id' => auth('api')->user()->id,
            ]);
            return ApiFormatter::createApi(200, "Success", $deleteAccount);
        }
    }
}

// $dataProfileUser = User::where('id', auth('api')->user()->id)->get()->count();
        // $dataProfileCV = CurriculumVitae::where('user_id', auth('api')->user()->id)->get()->count();
        // $dataProfilePhoto = Photo::where('user_id', auth('api')->user()->id)->get()->count();

        // if ($dataProfileUser == 0 && $dataProfileCV == 0) {
        //     User::where([
        //         'name' => $request->name,
        //         'bornday' => $request->bornday,
        //         'gender' => $request->gender
        //     ]);
        //     CurriculumVitae::where([
        //         'marital_status' => $request->marital_status,
        //     ]);
        // if ($files = $request->file('image')) {
        //     foreach ($files as $file) {
        //         $name = $file->getClientOriginalName();
        //         $file->move(public_path('image'), $name);
        //         $photo = Photo::insert([
        //             'user_id' => auth('api')->user()->id,
        //             'image' =>  $name,
        //         ]);
        //     }
        // }
        //     $updateUser = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
        //     $updateCV = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
        // } else {
        //     $updateUser = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
        //     $updateCV = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
        //     $updatePhoto = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
        //     return ApiFormatter::createApi(200, "Success", $request->all());
        // }
