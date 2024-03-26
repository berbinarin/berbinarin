<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\Hiring_Positions_Requirements;
use App\Models\KonsellingPeer;
use App\Models\KonsellingPsikolog;
use App\Models\jadwalPeer;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR,Konselling')->except(['login']);
    }
    public function index()
    {
        $HiringPosisitons = Hiring_Positions::count("id");
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::count("id");
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::count("id");

        $PeerConsellorSchedule = jadwalPeer::count("id");
        $PeerConsellorData = KonsellingPeer::count("id");
        $PsikologData = KonsellingPsikolog::count("id");
        
        return view('moduls.dashboard.index',["PeerConsellorSchedule"=> $PeerConsellorSchedule, "PeerConsellorData"=> $PeerConsellorData,'PsikologData'=>$PsikologData, "HiringPosisitonsJobDescriptionment"=> $HiringPosisitonsJobDescriptionment,'HiringPosisitons'=>$HiringPosisitons,'HiringPosisitonsRequirement'=>$HiringPosisitonsRequirement]);
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

    public function PeerConsellorSchedule()
    {
        $PeerConsellorSchedule = jadwalPeer::orderBy('hari')->orderBy('pukul_mulai')->get();
        return view('moduls.dashboard.konselling.peerschedule', ['PeerConsellorSchedule' => $PeerConsellorSchedule]);
    }

    public function addPeerConsellorSchedule(Request $request)
    {
        $validatedData = $request->validate([
            'hari' => 'required|not_in:default_value',
            'pukul_mulai' => 'required',
            'pukul_selesai' => 'required',
        ]);

        $konselling = new jadwalPeer();
        $konselling->fill($validatedData);
        $konselling->save();

        Alert::toast('New Peer Coonsellor Schedule Added', 'success')->autoClose(5000);;
        return redirect()->route('dashboard.PeerConsellorSchedule');
    }

    public function editPeerConsellorSchedule(Request $request, $id){
        $validatedData = $request->validate([
            'hari' => 'required|not_in:default_value',
            'pukul_mulai' => 'required',
            'pukul_selesai' => 'required',
        ]);

        $jadwalPeer = JadwalPeer::find($id);

        if (!$jadwalPeer) {
            return redirect()->route('dashboard.PeerConsellorSchedule')->with('error', 'Peer Consellor Schedule not found');
        }

        $jadwalPeer->hari = $validatedData['hari'];
        $jadwalPeer->pukul_mulai = $validatedData['pukul_mulai'];
        $jadwalPeer->pukul_selesai = $validatedData['pukul_selesai'];
        $jadwalPeer->save();

        Alert::toast('A Peer Consellor Schedule Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PeerConsellorSchedule');
    }
    
    public function deletePeerConsellorSchedule($id)
    {
        jadwalPeer::where('id',$id)->delete();
        Alert::toast('A Peer Coonsellor Schedule Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PeerConsellorSchedule');
    }

    public function PsikologData(Request $request)
    {
        $PsikologData = KonsellingPsikolog::all();
        $konselling = $request->session()->get('konselling');
        return view('moduls.dashboard.konselling.psikologdata', ['PsikologData' => $PsikologData], compact('konselling'));
    }

     public function addPsikologData(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        $jamMenit = substr($validatedData['jadwal_pukul'], 0, 5);
        $validatedData['jadwal_pukul'] = $jamMenit;

        if(empty($request->session()->get('konselling'))){
            $konselling = new KonsellingPsikolog();
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }else{
            $konselling = $request->session()->get('konselling');
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }
        $konselling->save();
        $request->session()->forget('konselling');

        Alert::toast('New Psikolog Appointment Data Added', 'success')->autoClose(5000);;
        return redirect()->route('dashboard.PsikologData');
    }

    public function PsikologDataDetails(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikolog::where('id',$id)->get();
        $konselling = $request->session()->get('konselling');
        return view('moduls.dashboard.konselling.psikologdatadetail', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }
    public function editPsikologDataDetails(Request $request, $id){
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        $PsikologDataDetails = KonsellingPsikolog::find($id);

        $PsikologDataDetails->jadwal_tanggal = $validatedData['jadwal_tanggal'];
        $PsikologDataDetails->jadwal_pukul = $validatedData['jadwal_pukul'];
        $PsikologDataDetails->nama = $validatedData['nama'];
        $PsikologDataDetails->no_wa = $validatedData['no_wa'];
        $PsikologDataDetails->email = $validatedData['email'];
        $PsikologDataDetails->jenis_kelamin = $validatedData['jenis_kelamin'];
        $PsikologDataDetails->agama = $validatedData['agama'];
        $PsikologDataDetails->tempat_lahir = $validatedData['tempat_lahir'];
        $PsikologDataDetails->tanggal_lahir = $validatedData['tanggal_lahir'];
        $PsikologDataDetails->suku = $validatedData['suku'];
        $PsikologDataDetails->status_pernikahan = $validatedData['status_pernikahan'];
        $PsikologDataDetails->alamat = $validatedData['alamat'];
        $PsikologDataDetails->posisi_anak = $validatedData['posisi_anak'];
        $PsikologDataDetails->pendidikan = $validatedData['pendidikan'];
        $PsikologDataDetails->riwayat_pekerjaan = $validatedData['riwayat_pekerjaan'];
        $PsikologDataDetails->hobi = $validatedData['hobi'];
        $PsikologDataDetails->kegiatan_sosial = $validatedData['kegiatan_sosial'];
        $PsikologDataDetails->cerita = $validatedData['cerita'];
        $PsikologDataDetails->save();

        Alert::toast('A Psikolog Appointment Data Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PsikologDataDetails', ['id' => $id]);
    }

    public function deletePsikologDataDetails($id)
    {
        KonsellingPsikolog::where('id',$id)->delete();
        Alert::toast('A Psikolog Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PsikologData');
    }

    public function PeerConsellorData(Request $request)
    {
        $PeerConsellorData = KonsellingPeer::all();
        $konselling = $request->session()->get('konselling');
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();
        return view('moduls.dashboard.konselling.peerdata', ['PeerConsellorData' => $PeerConsellorData], compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'konselling'));
    }

    public function addPeerConsellorData(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        if(empty($request->session()->get('konselling'))){
            $konselling = new KonsellingPeer();
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }else{
            $konselling = $request->session()->get('konselling');
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }
        $konselling->save();
        $request->session()->forget('konselling');

        Alert::toast('New Peer Coonsellor Appointment Data Added', 'success')->autoClose(5000);;
        return redirect()->route('dashboard.PeerConsellorData');
    }

    public function PeerConsellorDataDetails(Request $request, $id)
    {
        $PeerConsellorDataDetails = KonsellingPeer::where('id',$id)->get();
        $konselling = $request->session()->get('konselling');
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();
        return view('moduls.dashboard.konselling.peerdatadetail', ['PeerConsellorDataDetails' => $PeerConsellorDataDetails], compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'konselling'));
    }
    public function editPeerConsellorDataDetails(Request $request, $id){
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        $PeerConsellorDataDetails = KonsellingPeer::find($id);

        $PeerConsellorDataDetails->jadwal_tanggal = $validatedData['jadwal_tanggal'];
        $PeerConsellorDataDetails->jadwal_pukul = $validatedData['jadwal_pukul'];
        $PeerConsellorDataDetails->nama = $validatedData['nama'];
        $PeerConsellorDataDetails->no_wa = $validatedData['no_wa'];
        $PeerConsellorDataDetails->email = $validatedData['email'];
        $PeerConsellorDataDetails->jenis_kelamin = $validatedData['jenis_kelamin'];
        $PeerConsellorDataDetails->agama = $validatedData['agama'];
        $PeerConsellorDataDetails->tempat_lahir = $validatedData['tempat_lahir'];
        $PeerConsellorDataDetails->tanggal_lahir = $validatedData['tanggal_lahir'];
        $PeerConsellorDataDetails->suku = $validatedData['suku'];
        $PeerConsellorDataDetails->status_pernikahan = $validatedData['status_pernikahan'];
        $PeerConsellorDataDetails->alamat = $validatedData['alamat'];
        $PeerConsellorDataDetails->posisi_anak = $validatedData['posisi_anak'];
        $PeerConsellorDataDetails->pendidikan = $validatedData['pendidikan'];
        $PeerConsellorDataDetails->riwayat_pekerjaan = $validatedData['riwayat_pekerjaan'];
        $PeerConsellorDataDetails->hobi = $validatedData['hobi'];
        $PeerConsellorDataDetails->kegiatan_sosial = $validatedData['kegiatan_sosial'];
        $PeerConsellorDataDetails->cerita = $validatedData['cerita'];
        $PeerConsellorDataDetails->save();

        Alert::toast('A Peer Consellor Appointment Data Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PeerConsellorDataDetails', ['id' => $id]);
    }

    public function deletePeerConsellorDataDetails($id)
    {
        KonsellingPeer::where('id',$id)->delete();
        Alert::toast('A Peer Coonsellor Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.PeerConsellorData');
    }
}