<?php

namespace App\Http\Livewire;

use App\Models\Pengaduan;
use Livewire\Component;

class Lapor extends Component
{
    public $tgllapor, $nik, $isilaporan, $foto;
    public $sudahdikirim = 'belum';
    public function simpan()
    {
        $simpan = new Pengaduan();
        $simpan->tgl_pengaduan = $this->tgllapor;
        $simpan->nik = $this->nik;
        $simpan->isi_laporan = $this->isilaporan;
        $simpan->status = 'terkirim';
        $simpan->save();
        $this->sudahdikirim = 'sudah';
    }
    public function render()
    {
        return view('livewire.lapor');
    }
}
