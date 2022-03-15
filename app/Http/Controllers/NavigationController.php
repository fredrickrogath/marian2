<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInfo;

class NavigationController extends Controller
{
    public function dashboard(){
        
        $navigations = 'dashboard';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
        'navigations' => $navigations,
        'navigate_class' => $navigate_class
        ]);
    }

    public function register(){
        $update_info = UserInfo::where('user_id', Auth::user()->id)->get()->count() > 0 ? true : false;
        $navigations = 'register';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'update_info' => $update_info,
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }

    public function inbox(){
        $navigations = 'inbox';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }

    public function messages(){
        $navigations = 'messages';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }

    public function notifications(){
        $navigations = 'notifications';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }

    public function tasks(){
        $navigations = 'tasks';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }

    public function registerInfoInfo( Request $request){
        $request->validate([
            'title' => 'required', 
            'job_title' => 'required', 
            'status' => 'required', 
            'company' => 'required', 
            'contacts' => 'required', 
            'city' => 'required', 
            'state' => 'required', 
        ]);
        // dd(UserInfo::where('user_id', Auth::user()->id)->get()->count() > 0);
        if( UserInfo::where('user_id', Auth::user()->id)->get()->count() == 0 ){
            UserInfo::create([
                'title' => $request->title, 
                'job_title' => $request->job_title, 
                'status' => $request->status, 
                'company' => $request->company, 
                'contacts' => $request->contacts, 
                'city' => $request->city, 
                'state' => $request->state, 
                'user_id' => Auth::user()->id,
            ]);
        }

        $update_info = UserInfo::where('user_id', Auth::user()->id)->get()->count() > 0 ? true : false;
        $navigations = 'register';
        $navigate_class = 'border-indigo-500 text-gray-800 bg-gray-50';

        return view('dashboard',[
            'update_info' => $update_info,
            'navigations' => $navigations,
            'navigate_class' => $navigate_class
        ]);
    }
}