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
            'service_type' => 'required',
        ]);
        if (CodeVoucher::where('code', $request->code)->exists()) {
            return redirect()->back()->withInput()->withErrors(['code' => 'Kode voucher sudah digunakan!']);
        }

        CodeVoucher::create($request->all());
        return redirect()->route('dashboard.code-voucher.index')->with('success', 'Kode voucher berhasil ditambahkan!');
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
        return view('dashboard.counseling-pm.kode-voucher.edit', compact('id'));
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
            'service_type' => 'required',
        ]);

        // Cek duplikat kode voucher selain yang sedang diedit
        if (CodeVoucher::where('code', $request->code)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->withInput()->withErrors(['code' => 'Kode voucher sudah digunakan!']);
        }

        $voucher = CodeVoucher::findOrFail($id);
        $voucher->update($request->all());

        return redirect()->route('dashboard.code-voucher.index')->with('success', 'Kode voucher berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voucher = CodeVoucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('dashboard.code-voucher.index')->with('success', 'Kode voucher berhasil dihapus!');
    }
}
