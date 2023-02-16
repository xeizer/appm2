<div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>TANGGAL PENGADUAN</th>
                <th>NIK</th>
                <th>ISI LAPORAN</th>
                <th>STATUS</th>
                jika yang login itu levelnya admin maka tampil
                @if (Auth::user()->level == 'admin' or Auth::user()->level == 'petugas')
                    <th>AKSI</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($datapengaduan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tgl_pengaduan }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td>{{ $item->status }}</td>
                    @if (Auth::user()->level == 'admin' or Auth::user()->level == 'petugas')
                        <td>
                            <button class="btn btn-primary"
                                wire:click="ubahstatus('{{ $item->id }}','VERIVIED')">VERIVIED</button>
                            <button class="btn btn-danger"
                                wire:click="ubahstatus('{{ $item->id }}','DENIED')">DENIED</button>
                            <button class="btn btn-success"
                                wire:click="ubahstatus('{{ $item->id }}','FINISH')">FINISH</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" wire:click='pilihPengaduan({{ $item->id }})'>
                                TANGGAPAN
                            </button>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="print()">CETAK</button>
    <!-- Modal -->
    <div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Isikan Tanggapan Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" wire:model='tanggapan'></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='simpantanggapan'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
