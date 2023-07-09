<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\CurriculumVitae;
use App\Models\Khitbah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function curriculumVitae(Request $request)
    {
        $data = CurriculumVitae::where('user_id', auth('api')->user()->id)->get()->count();
        if($data == 0){
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
        }else{
            $update = CurriculumVitae::where('user_id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }

    public function getUserByGender()
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        if($gender->gender == 'Laki-laki'){
            $dataUser = User::where('gender', 'Perempuan')->get();
        }else{
            $dataUser = User::where('gender', 'Laki-laki')->get();
        }

        if($dataUser){
            return ApiFormatter::createApi(200, "Success", $dataUser);
        }else{
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    public function getNewUser()
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        if($gender->gender == 'Laki-laki'){
            $dataUser = User::where('gender', 'Perempuan')->orderBy('id', 'desc')->get();
        }else{
            $dataUser = User::where('gender', 'Laki-laki')->orderBy('id', 'desc')->get();
        }

        if($dataUser){
            return ApiFormatter::createApi(200, "Success", $dataUser);
        }else{
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
            $insert = Varification::create([
                'user_id' => auth('api')->user()->id,
                'ktp' => $request->ktp,
                'face_with_ktp' => $request->face_with_ktp,
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
        $dataProfileUser = User::where('id', auth('api')->user()->id)->first();
        $dataProfileCV = CurriculumVitae::where('user_id', auth('api')->user()->id)->get()->count();
        $dataProfilePhoto = Photo::where('user_id', auth('api')->user()->id)->get()->count();

        if ($dataProfileUser == 0 && $dataProfileCV == 0 && $dataProfilePhoto == 0) {
            User::create([
                'name' => $request->name,
                'bornday' => $request->bornday,
                'gender' => $request->gender
            ]);
            CurriculumVitae::create([
                'marital_status' => $request->marital_status,
            ]);
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path('image'), $name);
                    $photo = Photo::insert([
                        'user_id' => $user,
                        'image' =>  $name,
                    ]);
                }
            }
        } else {
            $updateUser = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
            $updateCV = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
            $updatePhoto = CurriculumVitae::where('id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }

    public function khitbahSubmission(Request $request, User $user, Khitbah $pendamping)
    {
        $dataFromSubmission = Khitbah::where('from', auth('api')->user()->id)->first();
        $dataKhitbahSchedules = KhitbahSchedule::where('khitbah_id', auth('api')->khitbahSubmission()->id)->get()->count();

        if ($dataFromSubmission == 0 && $dataKhitbahSchedules == 0) {
            $insertKhitbah = Khitbah::create([
                'from' => auth('api')->user()->id,
                'to' => $user,
            ]);
            return ApiFormatter::createApi(200, "Success", $insertKhitbah);
            if ($pendamping == 0) { //mandiri
                $insertKhitbahSchedule = KhitbahSchedule::create([
                    'khitbah_id' => auth('api')->khitbahSubmission()->id,
                    'guardian_name' => $request->guardian_name,
                    'guardian_phone' => $request->guardian_phone,
                    'notes' => $request->notes,
                ]);
                return ApiFormatter::createApi(200, "Success", $insertKhitbahSchedule);
            } else { //aplikasi
                $insertKhitbahSchedule = KhitbahSchedule::create([
                    'khitbah_id' => auth('api')->khitbahSubmission()->id,
                    // 'khitbah_id' => auth('api')->user()->id,
                    'ustadz_id' => $request->ustadz_id,
                    'notes' => $request->notes,
                ]);
                return ApiFormatter::createApi(200, "Success", $insertKhitbahSchedule);
            }
        } else {
            $update = Khitbah::where('id', auth('api')->user()->id)->update($request->all());
            $update = KhitbahSchedule::where('id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }


    public function userFavorite(Request $request, User $user)
    {
        $dataFavorite = Favorite::where('from', auth('api')->user()->id)->first();
        if ($dataFavorite == 0) {
            $insertFavorite = Favorite::create([
                'from' => auth('api')->user()->id,
                'to' => $user,
            ]);
            return ApiFormatter::createApi(200, "Success", $insertFavorite);
        } 
    }
    public function userUnFavorite(Request $request, User $user)
    {
        $dataFavorite = Favorite::where('from', auth('api')->user()->id)->first();
        if ($dataFavorite != 0) {
            $deleteFavorite = Favorite::delete([
                'from' => auth('api')->user()->id,
                'to' => $user,
            ]);
            return ApiFormatter::createApi(200, "Success", $deleteFavorite);
        }
    }

    public function getKhitbahSubmission(Request $request)
    {
        $gender = User::where('id', auth('api')->user()->id)->first();
        $submission = Khitbah::where('from', auth('api')->user()->id)->first();
        if($gender->gender == 'Laki-laki'){
            $getsubmission = Khitbah::create([
                // 'id' => auth('api')->khitbah()->id,
                'to' => $user,
                'status_khitbah' => $status_khitbah,
            ]);
            return ApiFormatter::createApi(200, "Success", $getsubmission);
        }else{
            $getsubmission = Khitbah::create([
                // 'id' => auth('api')->khitbah()->id,
                'from' => $user,
            ]);
            return ApiFormatter::createApi(200, "Success", $getsubmission);
        }
    }

    public function getSettings(Request $request)
    {
        $settings = User::where('id', auth('api')->user()->id)->first();
        if ($settings) {
            $getsetting = User::create([
                'user_id' => auth('api')->user()->id,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->bornplace,
            ]);
            return ApiFormatter::createApi(200, "Success", $getsetting);
        } else {
            $update = User::where('user_id', auth('api')->user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }

    public function deleteAccount(Request $request){
        $account = User::where('id', auth('api')->user()->id)->first();
        if($account){
            $deleteAccount = User::delete([
                'id' => auth('api')->user()->id,
            ]);
            return ApiFormatter::createApi(200, "Success", $deleteAccount);
        }
    }
}
