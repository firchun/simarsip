<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Pegawai'
        ];
        return view('pegawai.index', $data);
    }
    public function getPegawaiDataTable()
    {
        $pegawai = Pegawai::orderByDesc('id');

        return DataTables::of($pegawai)
            ->addColumn('action', function ($pegawai) {
                return view('pegawai.components.actions', compact('pegawai'));
            })

            ->rawColumns(['action'])
            ->make(true);
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $request->validate([
            'nip' => 'required|string|max:30|unique:pegawai,nip,' . $request->input('id'),
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Pria,Wanita',
            'alamat' => 'nullable|string',
            'kota' => 'nullable|string',
            'tempat_lahir' => 'required|string',
            'jabatan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:pegawai,email,' . $request->input('id'),
        ]);

        $pegawaiData = [
            'nip' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'kota' => $request->input('kota'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'email' => $request->input('email'),
            'jabatan' => $request->input('jabatan'),
        ];

        if ($request->filled('id')) {
            // Update existing record
            $pegawai = Pegawai::find($request->input('id'));
            if (!$pegawai) {
                return response()->json(['message' => 'Pegawai not found'], 404);
            }

            $pegawai->update($pegawaiData);
            $message = 'Pegawai updated successfully';
        } else {
            // Create new record
            Pegawai::create($pegawaiData);
            $message = 'Pegawai created successfully';
        }

        return response()->json(['message' => $message]);
    }
    public function destroy($id)
    {
        $customers = Pegawai::find($id);

        if (!$customers) {
            return response()->json(['message' => 'Pegawai not found'], 404);
        }

        $customers->delete();

        return response()->json(['message' => 'Pegawai deleted successfully']);
    }
    public function edit($id)
    {
        $customer = Pegawai::find($id);

        if (!$customer) {
            return response()->json(['message' => 'Pegawai not found'], 404);
        }

        return response()->json($customer);
    }
}