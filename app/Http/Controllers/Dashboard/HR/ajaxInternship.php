<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\UserInternship;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ajaxInternship extends Controller
{
    public function updateStatus(Request $request)
    {
        // Validate the request
        $request->validate([
            'status' => 'required|string',
            'id' => 'required|integer',
            'coloumn' => 'required|string',
        ]);

        $status = $request->input('status');
        $id = $request->input('id');
        $namaKolom = $request->input('coloumn');
        try {
            // Update the status for the specified record
            $application = UserInternship::find($id);
            if($namaKolom ===  'status_tidak_dapat_diproses'){
                $application->status_tidak_dapat_diproses = $status;
            }else if($namaKolom === 'status_catatan'){
                $application->status_catatan = $status;
            }else if($namaKolom === 'status_progress'){
                $application->status_progress = $status;
            }
            $application->save();

            Alert::toast('Status updated successfully', 'success');
            return response()->json(['message' => 'Status updated successfully']);
        } catch (\Exception $e) {
            Alert::toast('Error updating status', 'error');
            return response()->json(['message' => 'Error updating status'], 500);
        }
    }
}
