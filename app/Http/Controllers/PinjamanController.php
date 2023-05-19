<?php

namespace App\Http\Controllers;

use App\Models\pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    //
    public function index()
    {
        // Kode ini mengembalikan tampilan (view) dengan nama 'HalPinjaman' dan mengirimkan data penjualan ke tampilan tersebut.
        // Data penjualan diperoleh dengan menggunakan metode get() pada model pinjaman.
        return view('HalPinjaman', [
            'tampil' => pinjaman::get()
        ]);
    }

    public function create(Request $request)
    {
        //membuat objek baru dari model pinjaman
        $tampilHasil = new pinjaman();
        //kiri dari db kanan dari form
        $tampilHasil->nama = $request->nama;
        $tampilHasil->alamat = $request->alamat;
        $tampilHasil->jenis_pinjaman = $request->jenis_pinjaman;
        $tampilHasil->total_pinjaman = $request->total_pinjaman;
        // menyimpan nilai
        $tampilHasil->save();

        return view('HalPinjaman', [
            'tampil' => pinjaman::all()
        ]);
    }

    public function edit(string $id)
    {
        // Kode ini mencari data penjualan berdasarkan $id yang diberikan.
        // Data tersebut kemudian dikirimkan ke tampilan 'HalEditPinjaman' untuk proses pengeditan atau pembaruan data penjualan.
        $edit = pinjaman::find($id);
        return view('HalEditPinjaman', [
            'editData' => $edit
        ]);
    }

    public function update(Request $request, string $id)
    {
        //membuat objek baru dari model pinjaman
        $updateHasil = pinjaman::find($id);
        //kiri dari db kanan dari form
        $updateHasil->nama = $request->nama;
        $updateHasil->alamat = $request->alamat;
        $updateHasil->jenis_pinjaman = $request->jenis_pinjaman;
        $updateHasil->total_pinjaman = $request->total_pinjaman;
        //menyimpan nilai
        $updateHasil->save();

        // mengarahkan ke route yang bernama hal_utama
        return redirect()->route('hal_utama');
    }

    public function destroy(string $id)
    {
        // Kode ini mencari data penjualan berdasarkan $id yang diberikan.
        // Setelah itu, metode delete() digunakan untuk menghapus data penjualan yang ditemukan.
        $destroys = pinjaman::find($id);
        $destroys->delete();

        // mengarahkan ke route yang bernama hal_utama
        return redirect()->route('hal_utama');
    }
}
