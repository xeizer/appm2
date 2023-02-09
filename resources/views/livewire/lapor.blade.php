<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-white" style="background-color: rgb(232, 113, 238)">
                        {{ __('Pengaduan Masyarakat') }}
                    </div>

                    <div class="card-body">
                        <h1>LAPOR PAK!!</h1>
                        <div class="mb-3">
                            <label for="tgl_pengaduan" class="form-label">Tanggal pengaduan</label>
                            <input type="date" class="form-control" id="tgl_pengaduan"
                                placeholder="Masukkan Tanggal laporan Anda!!!">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik"
                                placeholder="Masukkan NIK Anda!!!">
                        </div>
                        <div class="mb-3">
                            <label for="isi_laporan" class="form-label">Isi Laporan Anda!</label>
                            <textarea class="form-control" id="isi_laporan" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Laporan Anda!</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <button type="button" class="btn btn-primary">Kirim</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
