<?php

namespace App\Http\Controllers\Dashboard\ClassPm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berbinarp_enrollments;
use App\Models\Berbinarp_user;
use App\Models\Berbinarp_class;

class BerbinarPlusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berbinarpUsers = Berbinarp_user::with(['enrollment.class'])->get();
        return view('dashboard.class-pm.berbinar-plus.user.index', compact('berbinarpUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus.user.create', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'wa_number' => 'required',
            'last_education' => 'required',
            'kelas' => 'required|exists:berbinarp_class,id',
            'paket' => 'required',
            'bukti_transfer' => 'required|file',
            'knowing_source' => 'required',
        ]);

        $buktiPath = null;
        if ($request->hasFile('bukti_transfer')) {
            $buktiPath = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
        }

        $user = Berbinarp_user::create([
            'email' => $request->email,
            'password' => bcrypt('abcdefgh123'),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'wa_number' => $request->wa_number,
            'last_education' => $request->last_education,
            'knowing_source' => $request->knowing_source,
        ]);

        Berbinarp_enrollments::create([
            'user_id' => $user->id,
            'class_id' => $request->kelas,
            'class_progress' => 1,
            'service_package' => $request->paket,
            'transfer_evidance' => $buktiPath,
            'enrollment_date' => now()->toDateString(),
            'expired_date' => now()->addDays(30)->toDateString(),
            'completed_date' => null,
        ]);

        return redirect()->route('dashboard.berbinar-plus.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'Kelas berhasil ditambahkan.',
            'type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berbinarpUsers = Berbinarp_user::with(['enrollment.class'])->findOrFail($id);
        return view('dashboard.class-pm.berbinar-plus.user.show', compact('berbinarpUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Berbinarp_user::with(['enrollment.class'])->findOrFail($id);
        $class = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus.user.edit', compact('user', 'class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'wa_number' => 'required',
            'last_education' => 'required',
            'kelas' => 'required',
            'paket' => 'required',
            'knowing_source' => 'required',
        ]);

        $user = Berbinarp_user::findOrFail($id);

        $user->update([
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'wa_number' => $request->wa_number,
            'last_education' => $request->last_education,
            'knowing_source' => $request->knowing_source,
        ]);

        // Update or create enrollment
        $enrollmentDate = now()->toDateString();
        $expiredDate = now()->addDays(30)->toDateString();
        $buktiPath = null;
        if ($request->hasFile('bukti_transfer')) {
            $buktiPath = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
        }

        $enrollment = $user->enrollment;
        if ($enrollment) {
            $enrollment->class_id = $request->kelas;
            $enrollment->service_package = $request->paket;
            if ($buktiPath) {
                $enrollment->transfer_evidance = $buktiPath;
            }
            $enrollment->enrollment_date = $enrollmentDate;
            $enrollment->expired_date = $expiredDate;
            $enrollment->save();
        } else {
            Berbinarp_enrollments::create([
                'user_id' => $user->id,
                'class_id' => $request->kelas,
                'class_progress' => 1,
                'service_package' => $request->paket,
                'transfer_evidance' => $buktiPath,
                'enrollment_date' => $enrollmentDate,
                'expired_date' => $expiredDate,
                'completed_date' => null,
            ]);
        }

        return redirect()->route('dashboard.berbinar-plus.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'Kelas berhasil diupdate.',
            'type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Berbinarp_user::findOrFail($id);

        // Hapus enrollments juga jika ada
        if ($user->enrollment) {
            $user->enrollment->delete();
        }

        $user->delete();
        
        return redirect()->route('dashboard.berbinar-plus.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'User berhasil dihapus.',
            'type' => 'success',
        ]);
    }
}
