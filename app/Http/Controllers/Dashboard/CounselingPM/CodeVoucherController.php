<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CodeVoucher;

class CodeVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = CodeVoucher::all();
        return view('dashboard.counseling-pm.kode-voucher.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('dashboard.counseling-pm.kode-voucher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'code' => 'required',
            'percentage' => 'required',
            'jenis_pendaftaran' => 'required',
            'nama_voucher' => 'required',
            'tipe' => 'required|array',
            'detail' => 'required|array',
        ]);
        if (CodeVoucher::where('code', $request->code)->exists()) {
            return redirect()->back()->withInput()->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Kode voucher sudah digunakan!',
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
        }
        $data = $request->all();
        $data['tipe'] = json_encode($request->tipe);
        $data['detail'] = json_encode($request->detail);

        CodeVoucher::create($data);

        // CodeVoucher::create($request->all());
        return redirect()->route('dashboard.code-voucher.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Code voucher berhasil ditambahkan',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $voucher = CodeVoucher::findOrFail($id);
        return view('dashboard.counseling-pm.kode-voucher.edit', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required',
            'code' => 'required',
            'percentage' => 'required',
            'jenis_pendaftaran' => 'required',
            'nama_voucher' => 'required',
            'tipe' => 'required|array',
            'detail' => 'required|array',
        ]);

        if (CodeVoucher::where('code', $request->code)->where('id', '!=', (int)$id)->exists()) {
            return redirect()->back()->withInput()->withErrors(['code' => 'Kode voucher sudah digunakan!']);
        }

        $voucher = CodeVoucher::findOrFail($id);

        $data = $request->all();
        $data['tipe'] = json_encode($request->tipe);
        $data['detail'] = json_encode($request->detail);

        $voucher->update($data);

        return redirect()->route('dashboard.code-voucher.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Code voucher berhasil diupdate',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voucher = CodeVoucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('dashboard.code-voucher.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Code voucher berhasil dihapus',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }
}
