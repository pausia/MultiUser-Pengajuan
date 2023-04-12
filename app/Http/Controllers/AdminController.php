<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function view_pengajuan(){
        return view('admin.pengajuan');
    }
    public function view_tracking(){
        $data=pengajuan::all();
        return view('admin.tracking', compact('data'));
    }
    public function delete_tracking($id){
        $data=Pengajuan::find($id);
        $data->delete();
        Alert::success('Anda berhasil Menghapus','Data Pengajuan Sudah Hilang');
        return redirect()->back() ;

    }
    public function update_tracking($id){
        //inisial dari $pengajuan bakalan dideklarasikan di file update.blade.php
        $pengajuan=Pengajuan::find($id);
        $pengajuan=Pengajuan::all();
        return view('admin.update_pengajuan', compact('pengajuan'));
    }
    public function update_tracking_confirm(Request $request,$id){
        $pengajuan=pengajuan::find($id);
        $pengajuan->perihal = $request->perihal;
        $pengajuan->waktu_kejadian = $request->waktu_kejadian;
        $pengajuan->lokasi = $request->lokasi;
        $pengajuan->uraian = $request->uraian;
        $pengajuan->bukti = $request->bukti;
        $pengajuan->save();
        Alert::success('Berhasil Mengupdate Pengajuan Anda','Sekarang dTracking Data telah Berubah');
        return redirect()->back() ;
    }

    public function add_pengajuan(Request $request){
        $data = new pengajuan;
        $data->perihal = $request->perihal;
        $data->waktu_kejadian = $request->waktu_kejadian;
        $data->lokasi = $request->lokasi;
        $data->uraian = $request->uraian;
        $data->bukti = $request->bukti;

        $data->save();
        Alert::success('Anda berhasil Menambahkan Pengajuan','Sekarang Pengajuan Anda ada di Tracking Pengajuan');
        return redirect()->back() ;
        //hmmm
        
    }
}
