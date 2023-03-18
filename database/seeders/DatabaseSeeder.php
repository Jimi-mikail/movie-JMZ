<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\departemen;
use App\Models\kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Jimi Mikail Zamzami',
            'password' => bcrypt('123456'),
            'departemen_id' => 1,
            'is_admin' => 1,
            'email' => 'jimi.erp@leetex.co.id',
            'nik' => 165007,


        ]);

        departemen::create([
            'nama' => 'IT',
        ]);
        departemen::create([
            'nama' => 'MERCHANDISER',
        ]);
        departemen::create([
            'nama' => 'HRD',
        ]);
        departemen::create([
            'nama' => 'MEKANIK',
        ]);
        departemen::create([
            'nama' => 'PPIC',
        ]);
        departemen::create([
            'nama' => 'KNITTING',
        ]);
        departemen::create([
            'nama' => 'QC KNIT',
        ]);
        departemen::create([
            'nama' => 'LINKING WAREHOUSE',
        ]);
        departemen::create([
            'nama' => 'LINKING',
        ]);
        departemen::create([
            'nama' => 'SOOM SONTEX',
        ]);
        departemen::create([
            'nama' => 'STITCHING',
        ]);
        departemen::create([
            'nama' => 'SEWING',
        ]);
        departemen::create([
            'nama' => 'STEAM',
        ]);
        departemen::create([
            'nama' => 'QC AKHIR',
        ]);
        departemen::create([
            'nama' => 'LABEL',
        ]);
        departemen::create([
            'nama' => 'FOLLOW UP',
        ]);
        departemen::create([
            'nama' => 'PACKING',
        ]);
        departemen::create([
            'nama' => 'EKSPEDISI',
        ]);
        departemen::create([
            'nama' => 'GUDANG BENANG',
        ]);
        departemen::create([
            'nama' => 'GULUNG BENANG',
        ]);
        departemen::create([
            'nama' => 'EXIM',
        ]);
        departemen::create([
            'nama' => 'SECURITY',
        ]);
        departemen::create([
            'nama' => 'GUDANG EKSPOR',
        ]);
        departemen::create([
            'nama' => 'SEKRETARIS',
        ]);
        departemen::create([
            'nama' => 'SUSTAINABILITY',
        ]);
        departemen::create([
            'nama' => 'TARGET',
        ]);
        departemen::create([
            'nama' => 'LEGAL',
        ]);
        departemen::create([
            'nama' => 'ACCOUNTING',
        ]);
        departemen::create([
            'nama' => 'PROGRAMMER',
        ]);
        departemen::create([
            'nama' => 'GUDANG ACCECORIES',
        ]);
        departemen::create([
            'nama' => 'QA (QUALITY ASSURANCE)',
        ]);
        departemen::create([
            'nama' => 'IT (TLS)',
        ]);

        departemen::create([
            'nama' => 'PAYROLL',
        ]);
        departemen::create([
            'nama' => 'PURCHASING',
        ]);
        departemen::create([
            'nama' => 'SAMPLE',
        ]);
        departemen::create([
            'nama' => 'OBRAS',
        ]);
        departemen::create([
            'nama' => 'SEWING LO',
        ]);
        departemen::create([
            'nama' => 'PINANGSIA OFFICE',
        ]);
    }
}
