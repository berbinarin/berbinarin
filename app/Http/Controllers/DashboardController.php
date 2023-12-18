<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\Hiring_Positions_Requirements;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR')->except(['login']);
    }
    public function index()
    {
        $HiringPosisitons = Hiring_Positions::count("id");
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::count("id");
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::count("id");
        
        return view('moduls.dashboard.index',["HiringPosisitonsJobDescriptionment"=> $HiringPosisitonsJobDescriptionment,'HiringPosisitons'=>$HiringPosisitons,'HiringPosisitonsRequirement'=>$HiringPosisitonsRequirement]);
    }

    public function login()
    {
        return view('moduls.dashboard.login');
    }

    public function faqs()
    {
        return view('moduls.dashboard.faqs');
    }

    public function positions()
    {
        $HiringPosisitons = Hiring_Positions::all();
        return view('moduls.dashboard.hr.positions.positions',['HiringPosisitons'=>$HiringPosisitons] );
    }

    public function editPositions($id)
    {
        $HiringPosisitons = Hiring_Positions::find($id);
        return view('moduls.dashboard.hr.positions.edit-positions', ['HiringPosisitons'=> $HiringPosisitons]);
    }

    public function jobDescriptions()
    {
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::all();
        $HiringPosisitons = Hiring_Positions::all();

        return view('moduls.dashboard.hr.job-descriptions.job-descriptions',["HiringPosisitonsJobDescriptionment"=> $HiringPosisitonsJobDescriptionment,'HiringPosisitons'=>$HiringPosisitons ]);
    }

    public function editJobDescriptions($id) {
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::find($id);
        $HiringPosisitons = Hiring_Positions::all();

        return view('moduls.dashboard.hr.job-descriptions/edit-job-descriptions',['HiringPosisitonsJobDescriptionment'=>$HiringPosisitonsJobDescriptionment,'HiringPosisitons'=>$HiringPosisitons]);
    }

    public function requirements()
    {
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::all();
        $HiringPosisitons = Hiring_Positions::all();

        return view('moduls.dashboard.hr.requirements.requirements', ["HiringPosisitonsRequirement"=>$HiringPosisitonsRequirement,'HiringPosisitons'=>$HiringPosisitons]);
    }

    public function editRequirements($id)
    {
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::find($id);
        $HiringPosisitons = Hiring_Positions::all();


        return view('moduls.dashboard.hr.requirements.edit-requirements', ['HiringPosisitonsRequirement'=>$HiringPosisitonsRequirement,'HiringPosisitons'=>$HiringPosisitons]);
    }
}