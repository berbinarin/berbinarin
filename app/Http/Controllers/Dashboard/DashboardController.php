<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Author;
use App\Models\Articles\Category;
use App\Models\Berbinarp_enrollments;
use App\Models\Berbinarp_user;
use App\Models\Berbinarp_class;
use App\Models\Dimension;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\Hiring_Positions_Requirements;
use App\Models\jadwalPeer;
use App\Models\KeluargaBerbinar\Division;
use App\Models\KeluargaBerbinar\SubDivision;
use App\Models\KeluargaBerbinar\TableRecord;
use App\Models\KeluargaBerbinar\TableStaff;
use App\Models\KonsellingPeer;
use App\Models\KonsellingPsikolog;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\Question;
use App\Models\Test;
use App\Models\UserInternship;
use App\Models\UserPsikotest;
use App\Models\BerbinarForU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    public function index()
    {
        $HiringPosisitons = Hiring_Positions::count("id");
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::count("id");
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::count("id");

        $PeerConsellorSchedule = jadwalPeer::count("id");
        $PeerConsellorData = KonsellingPeer::where('kategori', 'peer-counselor')->count();
        $PsikologData = KonsellingPsikolog::where('kategori', 'psikolog')->count();
        $BerbinarForU = BerbinarForU::where('kategori', 'berbinar-for-u')->count();


        $totalUserPsikotest = UserPsikotest::count('id');
        $totalQuestion = Question::count('id');

        $totalBerbinarPlusUser = Berbinarp_user::count('id');
        $totalBerbinarPlusClass = Berbinarp_class::count('id');

        $totalUserPsikotestPaid = UserPsikotestPaid::count('id');

        $categoryIndividu = DB::table('psikotest_types')
            ->where('category_psikotest_type_id', 2)
            ->pluck('id');
        $individu = UserPsikotestPaid::whereIn('psikotest_type_id', $categoryIndividu)->count();

        $categoryeducationalInstitution = DB::table('psikotest_types')
            ->where('category_psikotest_type_id', 3)
            ->pluck('id');

        $educationalInstitution = UserPsikotestPaid::whereIn('psikotest_type_id', $categoryeducationalInstitution)->count();

        $categoryeCorporate = DB::table('psikotest_types')
            ->where('category_psikotest_type_id', 4)
            ->pluck('id');

        $corporate = UserPsikotestPaid::whereIn('psikotest_type_id', $categoryeCorporate)->count();

        $categoryeCommunity = DB::table('psikotest_types')
            ->where('category_psikotest_type_id', 1)
            ->pluck('id');

        $community = UserPsikotestPaid::whereIn('psikotest_type_id', $categoryeCommunity)->count();

        $articleCount = Article::count();

        $authorCount = Author::count();

        $categoryCount = Category::count();
        $staff = TableStaff::all();
        $subDivisions = SubDivision::count();


        return view('dashboard.index', [
            "PeerConsellorSchedule" => $PeerConsellorSchedule,
            "PeerConsellorData" => $PeerConsellorData,
            'PsikologData' => $PsikologData,
            'BerbinarForU' => $BerbinarForU,
            "HiringPosisitonsJobDescriptionment" => $HiringPosisitonsJobDescriptionment,
            'HiringPosisitons' => $HiringPosisitons,
            'HiringPosisitonsRequirement' => $HiringPosisitonsRequirement,
            'totalUserPsikotest' => $totalUserPsikotest,
            'totalQuestion' => $totalQuestion,
            'totalUserPsikotestPaid' => $totalUserPsikotestPaid,
            'individu' => $individu,
            'educationalInstitution' => $educationalInstitution,
            'corporate' => $corporate,
            'community' => $community,
            'articleCount' => $articleCount,
            'authorCount' => $authorCount,
            'categoryCount' => $categoryCount,
            'staff' => $staff,
            'subDivisions' => $subDivisions,
            "totalBerbinarPlusUser" => $totalBerbinarPlusUser,
            "totalBerbinarPlusClass" => $totalBerbinarPlusClass,

        ]);
    }
   
}
