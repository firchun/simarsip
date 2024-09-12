<?php

namespace App\Http\Controllers;

use App\Models\JenisArsip;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JenisController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Jenis Dokumen'
        ];
        return view('jenis_dokumen.index', $data);
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $request->validate([
            'kd_jenis' => 'required|string|max:30|unique:jenis_arsip,kd_jenis,' . $request->input('id'),
        ]);

        $pegawaiData = [
            'kd_jenis' => $request->input('kd_jenis'),
            'desc_jenis' => $request->input('desc_jenis'),
        ];

        if ($request->filled('id')) {
            // Update existing record
            $pegawai = JenisArsip::find($request->input('id'));
            if (!$pegawai) {
                return response()->json(['message' => 'Jenis not found'], 404);
            }

            $pegawai->update($pegawaiData);
            $message = 'Jenis updated successfully';
        } else {
            // Create new record
            JenisArsip::create($pegawaiData);
            $message = 'Jenis created successfully';
        }

        return response()->json(['message' => $message]);
    }
    public function getJenisDataTable()
    {
        $jenis = JenisArsip::orderByDesc('id');

        return DataTables::of($jenis)
            ->addColumn('action', function ($jenis) {
                return view('jenis_dokumen.components.actions', compact('jenis'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function destroy($id)
    {
        $customers = JenisArsip::find($id);

        if (!$customers) {
            return response()->json(['message' => 'Jenis not found'], 404);
        }

        $customers->delete();

        return response()->json(['message' => 'Jenis deleted successfully']);
    }
    public function edit($id)
    {
        $customer = JenisArsip::find($id);

        if (!$customer) {
            return response()->json(['message' => 'Jenis not found'], 404);
        }

        return response()->json($customer);
    }
}