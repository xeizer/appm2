<?php

namespace App\Http\Livewire;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Semuapengaduan extends Component
{
    public $pengaduanyangdipilih, $tanggapan;
    public function ubahstatus($id, $gantiapa)
    {

        $yangakandiubah = Pengaduan::find($id);
        $yangakandiubah->status = $gantiapa;
        $yangakandiubah->save();
    }
    public function pilihPengaduan($id)
    {
        $this->pengaduanyangdipilih = Pengaduan::find($id);
    }
    public function simpantanggapan()
    {
        //proses simpan tanggapan
        $simpan = new Tanggapan();
        $simpan->id_pengaduan = $this->pengaduanyangdipilih->id;
        $simpan->tgl_tanggapan = date('Y-m-d');
        $simpan->tanggapan = $this->tanggapan;
        $simpan->id_petugas = Auth::id();
        $simpan->save();
    }
    public function render()
    {
        return view('livewire.semuapengaduan', [
            'datapengaduan' => Pengaduan::all(),
        ]);
    }
}
