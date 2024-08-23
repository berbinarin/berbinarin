<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use App\Models\PsikotestPaid\PsikotestPaidTestimonial;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\UserPsikotestPaid;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR,Konselling,PsikotestFree,psikotestpaid')->except(['login']);
    }

    public function userRegister()
    {
        // $users = UserPsikotestPaid::all();
        $users = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->get();
        return view('moduls.dashboard.psikotes-paid.data', compact('users'));
    }

    public function userDetail($id)
    {
        $user = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->find($id);

        return view('moduls.dashboard.psikotes-paid.data-detail', compact('user'));
    }

    public function psikotestTool()
    {
        $tools = PsikotestTool::all();

        return view('moduls.dashboard.psikotes-paid.data-test', compact('tools'));
    }

    public function generateToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = Str::random(8);
        $tool->save();

        return redirect()->back()->with('success', 'Token generated successfully!');
    }

    public function deleteToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = null;
        $tool->save();

        return redirect()->back()->with('success', 'Token deleted successfully!');
    }

    public function priceList()
    {
        $priceList = PsikotestType::with('categoryPsikotestType')->get();

        return view('moduls.dashboard.psikotes-paid.price-list', compact('priceList'));
    }

    public function storePriceList(Request $request)
    {
        $request->validate([
            'category_psikotest_type_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        PsikotestType::create([
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
            'category_psikotest_type_id' => $request->category_psikotest_type_id,
        ]);

        return redirect()->back()->with('success', 'Pricelist berhasil ditambahkan.');
    }

    public function editPriceList(Request $request, $id)
    {
        $request->validate([
            'category_psikotest_type_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $psikotestType = PsikotestType::findOrFail($id);
        $psikotestType->update([
            'category_psikotest_type_id' => $request->category_psikotest_type_id,
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
        ]);

        return redirect()->back()->with('success', 'Pricelist berhasil diupdate.');
    }

    public function deletePriceList($id)
    {
        $priceList = PsikotestType::findOrFail($id);
        $priceList->delete();

        return redirect()->back()->with('success', 'Pricelist berhasil dihapus.');
    }


    // public function updatePriceList(Request $request, $id)
    // {
    //     $request->validate([
    //         'psikotest_category_id' => 'required',
    //         'psikotest_type_id' => 'required',
    //         'price' => 'required|numeric',
    //     ]);

    //     $psikotestType = PsikotestType::findOrFail($id);
    //     $psikotestType->update([
    //         'category_psikotest_type_id' => $request->psikotest_category_id,
    //         'name' => $request->psikotest_type_id,
    //         'price' => str_replace('.', '', $request->price), // Menghilangkan titik pada harga sebelum disimpan
    //     ]);

    //     return redirect()->route('psikotes.index')->with('success', 'Data berhasil diupdate.');
    // }

    public function testimoni()
    {
        $testimoni = PsikotestPaidTestimonial::with('userPsikotestPaid')->get();

        return view('moduls.dashboard.psikotes-paid.testi', compact('testimoni'));
    }

    public function testimoniShow($id)
    {
        $testimoni = PsikotestPaidTestimonial::with('userPsikotestPaid')->findOrFail($id);

        return view('moduls.dashboard.psikotes-paid.testi-detail', compact('testimoni'));
    }
}
