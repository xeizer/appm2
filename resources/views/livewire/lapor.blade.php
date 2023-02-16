<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($sudahdikirim == 'belum')
                    <div class="card shadow-lg">
                        <div class="card-header text-white" style="background-color: rgb(232, 113, 238)">
                            {{ __('Pengaduan Masyarakat') }}
                        </div>

                        <div class="card-body">
                            <h1>LAPOR PAK!!</h1>
                            <div class="mb-3">
                                <label for="tgl_pengaduan" class="form-label">Tanggal pengaduan</label>
                                <input type="date" class="form-control" id="tgl_pengaduan"
                                    placeholder="Masukkan Tanggal laporan Anda!!!" wire:model='tgllapor'>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik"
                                    placeholder="Masukkan NIK Anda!!!" wire:model='nik'>
                            </div>
                            <div class="mb-3">
                                <label for="isi_laporan" class="form-label">Isi Laporan Anda!</label>
                                <textarea class="form-control" id="isi_laporan" rows="3" wire:model='isilaporan'></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Laporan Anda!</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button type="button" class="btn btn-primary" wire:click='simpan'>Kirim</button>

                        </div>
                    </div>
                @endif
                @if ($sudahdikirim == 'sudah')
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                            aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            laporan anda sudah terkirim.<a href="/home">silahkan kembali ke beranda</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
