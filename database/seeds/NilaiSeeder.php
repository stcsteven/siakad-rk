<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MataPelajaran;
use App\TahunAjaran;
use App\Nilai;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    $users = User::where('kode','SIS')->first();
    	// DB::statement('SET FOREIGN_KEY_CHECKS = 1');
     //    foreach ($users as $key => $user) {
        	$nilai = new Nilai;
        	$nilai->kode = 1;
        	$nilai->no_induk_siswa = '25169';
        	$nilai->id_mapel = 1;
        	$nilai->id_semester = 1;
        	$nilai->save();
     //    }
    	// DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}