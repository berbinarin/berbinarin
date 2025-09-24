<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\jadwalPeer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeerCounselorScheduleController extends Controller
{
    public function index()
    {
        $PeerConsellorSchedule = jadwalPeer::orderBy('hari')->orderBy('pukul_mulai')->get();
        return view('dashboard.counseling-pm.peer-counselor-schedules.index', ['PeerConsellorSchedule' => $PeerConsellorSchedule]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hari' => 'required|not_in:default_value',
            'pukul_mulai' => 'required',
            'pukul_selesai' => 'required',
            'penanggung_jawab' => 'required'
        ]);

        $konselling = new jadwalPeer();
        $konselling->fill($validatedData);
        $konselling->save();

         return redirect()->route('dashboard.peer-counselor-schedules.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berhasil Dimasukkan',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'hari' => 'required|not_in:default_value',
            'pukul_mulai' => 'required',
            'pukul_selesai' => 'required',
            'penanggung_jawab' => 'required'
        ]);

        $jadwalPeer = JadwalPeer::find($id);

        if (!$jadwalPeer) {
            return redirect()->route('dashboard.peer-counselor-schedules.index')->with('error', 'Peer Consellor Schedule not found');
        }

        $jadwalPeer->hari = $validatedData['hari'];
        $jadwalPeer->pukul_mulai = $validatedData['pukul_mulai'];
        $jadwalPeer->pukul_selesai = $validatedData['pukul_selesai'];
        $jadwalPeer->penanggung_jawab = $validatedData['penanggung_jawab'];
        $jadwalPeer->save();

         return redirect()->route('dashboard.peer-counselor-schedules.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berhasil Diedit',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }


    public function destroy($id)
    {
        jadwalPeer::where('id', $id)->delete();
        return redirect()->route('dashboard.peer-counselor-schedules.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berhasil Dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }
}
