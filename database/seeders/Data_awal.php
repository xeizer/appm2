<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Data_awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin              = new User();
        $admin->nik         = '617101072000';
        $admin->nama        = 'Dior jordan';
        $admin->email       = 'Diorgemink@sosis.me';
        $admin->password    = bcrypt('bangmessi');
        $admin->telp        = '0856787765';
        $admin->level       =  'admin';
        $admin->save();

        $petugas              = new User();
        $petugas->nik         = '61720205623';
        $petugas->nama        = 'Dior Major';
        $petugas->email       = 'Majorgemink@sosis.me';
        $petugas->password    = bcrypt('bangdodo');
        $petugas->telp        = '085845453436';
        $petugas->level       =  'petugas';
        $petugas->save();
    }
}
