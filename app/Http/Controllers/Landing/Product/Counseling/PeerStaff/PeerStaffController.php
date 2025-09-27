<?php

namespace App\Http\Controllers\Landing\Product\Counseling\PeerStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CounsellingPM\KonsellingPeerStaff;
use App\Models\CodeVoucher;

class PeerStaffController extends Controller
{
    public function showPsikologStaffForm()
    {
        return view('landing.product.counseling.staff-peer.registration-peer-staff');
    }

    public function cekVoucher(Request $request)
    {
        $code = $request->code;
        $jadwal_tanggal = $request->jadwal_tanggal;
        $metode = $request->metode;
        $sesi = $request->sesi;

        $voucher = CodeVoucher::where('code', $code)->first();

        if (!$voucher) {
            return response()->json(['valid' => false]);
        }

        $tipeArr = json_decode($voucher->tipe, true);
        $detailArr = json_decode($voucher->detail, true);

        $isValid = true;
        foreach ($tipeArr as $i => $tipe) {
            $detail = $detailArr[$i] ?? null;
            if ($tipe == 'hari') {
                // Cek hari konseling
                $dateParts = explode('/', $jadwal_tanggal);
                $dateObj = \Carbon\Carbon::createFromFormat('d/m/Y', $jadwal_tanggal);
                $day = $dateObj->dayOfWeek; // 0: Minggu, 6: Sabtu
                $isWeekend = ($day == 0 || $day == 6);
                if ($detail == 'weekdays' && $isWeekend) $isValid = false;
                if ($detail == 'weekend' && !$isWeekend) $isValid = false;
            }
            if ($tipe == 'metode' && $metode != $detail) $isValid = false;
            if ($tipe == 'sesi' && $sesi != $detail) $isValid = false;
        }

        if (!$isValid) {
            return response()->json(['valid' => false]);
        }

        return response()->json([
            'valid' => true,
            'category' => $voucher->category,
            'code' => $voucher->code,
            'percentage' => $voucher->percentage,
            'service_type' => $voucher->service_type,
            'nama_voucher' => $voucher->nama_voucher,
        ]);
    }

    public function storePeerStaffRegistration(Request $request)
    {
        $rules = [
            'jadwal_tanggal'    => 'required',
            'jadwal_pukul'      => 'required',
            'nama'              => 'required',
            'email'             => 'required',
            'tanggal_Lahir'     => 'required',
            'tempat_lahir'      => 'required',
            'alamat'            => 'required',
            'umur'              => 'required',
            'agama'             => 'required',
            'posisi_anak'       => 'required',
            'pendidikan'        => 'required',
            'riwayat_pekerjaan' => 'required',
            'divisi'            => 'required',
            'posisi'            => 'required',
            'status_pernikahan' => 'required',
            'no_wa'             => 'required',
            'suku'              => 'required',
            'topik_pengajuan'   => 'required',
            'cerita'            => 'required',
            'kegiatan_sosial'   => 'required',
            'hobi'              => 'required',
        ];

        $validatedData = $request->validate($rules);

        try {
            // Format tanggal
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_Lahir);
            $jadwalTanggal = \DateTime::createFromFormat('d/m/Y', $request->jadwal_tanggal);

            $data = $validatedData;
            $data['tanggal_Lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;
            $data['jadwal_tanggal'] = $jadwalTanggal ? $jadwalTanggal->format('Y-m-d') : null;

            KonsellingPeerStaff::create($data);

            return view('landing.product.counseling.summary-konseling-staff');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }
}
