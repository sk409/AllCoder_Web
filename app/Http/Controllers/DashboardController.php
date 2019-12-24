<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        //
        $this->middleware('auth');
    }

    public function purchasedMaterials(): Renderable
    {
        $user = Auth::user();
        $materials = $user->purchases;
        return view("dashboard_purchased_materials", [
            "__header" => "abc",
            "user" => $user,
            "materials" => $materials,
            "activeIndex" => "1",
        ]);
    }

    public function createdMaterials(): Renderable
    {
        $user = Auth::user();
        $materials = $user->materials;
        return view('dashboard_created_materials', [
            "__header" => "",
            "user" => $user,
            "materials" => $materials,
            "activeIndex" => 2,
        ]);
    }

    public function lessons(): Renderable
    {
        $user = Auth::user();
        $lessons = Lesson::where("user_id", $user->id)->get()->all();
        return view('dashboard_lessons', [
            "__header" => "",
            "user" => $user, "lessons" => $lessons,
            "activeIndex" => 3,
        ]);
    }

    public function followings(): Renderable
    {
        return view("dashboard_followings", [
            "__header" => "",
            "user" => Auth::user(),
            "activeIndex" => 4,
        ]);
    }

    public function followers(): Renderable
    {
        return view("dashboard_followers", [
            "__header" => "",
            "user" => Auth::user(),
            "activeIndex" => 5,
        ]);
    }

    public function chatRooms(): Renderable
    {
        $user = User::find(Auth::user()->id);
        return view("dashboard_chat_rooms", [
            "__header" => "",
            "user" => $user,
            "activeIndex" => 6,
        ]);
    }
}
