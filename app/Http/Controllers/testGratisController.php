<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoalRequest;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\hasilTest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class testGratisController extends Controller
{
    public function CreateSoal (){
        return view("");
    }
     public function simpanSoal ( SoalRequest $request){
        try {
           
            $validated = $request->validated();
    
            Soal::create([
                'contentSoal' => $validated["contentSoal"],
                'categoryDimensi' => $validated['categoryDimensi'],
                'tipePerhitungan' => $validated['tipePerhitungan'],
            ]);
            
            Alert::toast('Soal Berhasil di simpan', 'success')->autoClose(5000);;
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    public function hitungPoint(Request $request){
        try{

            $validation = $request->validated([
                "user_id" => "required",
                "soal_id" => "required",
                "point" =>"required|integer"
            ]);
    
           $jawaban = Jawaban::create([
                'user_id' => $validation["user_id"],    
                'soal_id' => $validation["soal_id"],
                'point' => $validation['point'],
            ]);

            $soal = Soal::where('id', $jawaban->soal_id)->first();
            $sumSoal = Soal::where('no', $soal->no)->count();            
            if ($soal) {
                $sumPoint = Jawaban::where('soal_id', $soal->id)
                    ->join('soal', 'jawaban.soal_id', '=', 'soal.id')
                    ->where('soal.categoryDimensi', '=', $soal->categoryDimensi)
                    ->sum('jawaban.poin');

                
            } else {
                // Handle jika $soal tidak ditemukan
                $sumPoint = 0; // Atau sesuaikan dengan penanganan yang sesuai
            }
            

            $average  = $sumPoint / $sumSoal; 
            $presentase = $average/5 *100 ;

            hasilTest::create([
                "totalPoint" => $sumPoint,
                "jumlahSoal" => $sumSoal,
                "rata-rata" => $average,
                "presentation" => $presentase,
                "dimensi" => $soal->categoryDimensi
            ]);


    
            Alert::toast('Semua Jawaban berhasil di simpan', 'success')->autoClose(5000);;
            return redirect()->back();
        }catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }
}
