<?php

namespace App\Http\Controllers;

use App\Title;
use App\Level;
use App\Compensation;
use App\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        try{
            $titles_with_compensations = Title::with('compensations')->get();
            $recent_compensations = Compensation::latest('created_at')->take(5)->get();
            $companies = Company::all();
            $titles = Title::all();
            return JSON(CODE_SUCCESS,['compensation_data' => $titles_with_compensations,'titles' => $titles,'companies'=> $companies,'recent_compensations' => $recent_compensations],'success');
        }catch(\Exception $e){

            \logger('This is the error '.$e);
        }

    }
}
