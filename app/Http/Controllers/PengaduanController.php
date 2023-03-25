<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('masyarakat.pengaduan.index');
    }

    public function list()
    {
        $datas = Pengaduan::get();
        return view('masyarakat.pengaduan.list', compact('datas'));
    }

    public function store(Request $request)
    {
        $validate = $request->all();
        $validate = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tgl_pengaduan' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
        ]);
          if ($request->file('foto')) {
            $validate['foto'] = $request->file('foto')->store('pengaduan-img');
          }
        Pengaduan::create($validate);
        return redirect()->route('pengaduan');
    }

     public function show($id_pengaduan)
    {
        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->get();
        return view('masyarakat.pengaduan.show', compact('data'));
    }

      public function destroy($id_pengaduan)
    {
        $datas = Pengaduan::findOrfail($id_pengaduan);
        if ($datas->foto) {
            Storage::delete($datas->foto);
        }
        $datas->delete();
        return redirect()->route('tanggapan');
    }

     public function cetak()
    {
        $data = Pengaduan::all();
    	$pdf = PDF::loadview('admin.tanggapan.cetak-pdf', compact('data'))->setOptions(['enable_php', true, 'dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('PengaduanMasyarakat.pdf');
    }
}
