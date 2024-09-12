<?php

namespace App\Http\Controllers;

use App\Models\LokasiArsip;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LokasiArsipController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Lokasi Arsip'
        ];
        return view('lokasi_arsip.index', $data);
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $request->validate([
            'kd_lokasi' => 'required|string|max:30|unique:lokasi_arsip,kd_lokasi,' . $request->input('id'),
        ]);

        $pegawaiData = [
            'kd_lokasi' => $request->input('kd_lokasi'),
            'lokasi' => $request->input('lokasi'),
        ];

        if ($request->filled('id')) {
            // Update existing record
            $pegawai = LokasiArsip::find($request->input('id'));
            if (!$pegawai) {
                return response()->json(['message' => 'Lokasi not found'], 404);
            }

            $pegawai->update($pegawaiData);
            $message = 'Lokasi updated successfully';
        } else {
            // Create new record
            LokasiArsip::create($pegawaiData);
            $message = 'Lokasi created successfully';
        }

        return response()->json(['message' => $message]);
    }
    public function getLokasiDataTable()
    {
        $lokasi = LokasiArsip::orderByDesc('id');

        return DataTables::of($lokasi)
            ->addColumn('action', function ($lokasi) {
                return view('lokasi_arsip.components.actions', compact('lokasi'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function destroy($id)
    {
        $customers = LokasiArsip::find($id);

        if (!$customers) {
            return response()->json(['message' => 'lokasi not found'], 404);
        }

        $customers->delete();

        return response()->json(['message' => 'lokasi deleted successfully']);
    }
    public function edit($id)
    {
        $customer = LokasiArsip::find($id);

        if (!$customer) {
            return response()->json(['message' => 'Lokasi not found'], 404);
        }

        return response()->json($customer);
    }
}