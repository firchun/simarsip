<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Pengguna'
        ];
        return view('pengguna.index', $data);
    }
    public function getPenggunaDataTable()
    {
        $pengguna = User::orderByDesc('id');

        return DataTables::of($pengguna)
            ->addColumn('action', function ($pengguna) {
                return view('pengguna.components.actions', compact('pengguna'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function destroy($id)
    {
        $customers = User::find($id);

        if (!$customers) {
            return response()->json(['message' => 'Pengguna not found'], 404);
        }

        $customers->delete();

        return response()->json(['message' => 'Pengguna deleted successfully']);
    }
    public function edit($id)
    {
        $customer = User::find($id);

        if (!$customer) {
            return response()->json(['message' => 'Pengguna not found'], 404);
        }

        return response()->json($customer);
    }
}