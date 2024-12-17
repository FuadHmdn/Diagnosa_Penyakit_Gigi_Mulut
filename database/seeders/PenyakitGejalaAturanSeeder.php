<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;

class PenyakitGejalaAturanSeeder extends Seeder
{
    public function run()
    {
        // Insert Data Gejala
        $gejala = [
            ['id_gejala' => 'G01', 'nama_gejala' => 'Bau mulut tak sedap'],
            ['id_gejala' => 'G02', 'nama_gejala' => 'Gusi bengkak dan berdarah'],
            ['id_gejala' => 'G03', 'nama_gejala' => 'Gelisah'],
            ['id_gejala' => 'G04', 'nama_gejala' => 'Kelelahan'],
            ['id_gejala' => 'G05', 'nama_gejala' => 'Luka antara gusi dan gigi'],
            ['id_gejala' => 'G06', 'nama_gejala' => 'Benjolan di bagian kepala, leher, atau rahang'],
            ['id_gejala' => 'G07', 'nama_gejala' => 'Demam'],
            ['id_gejala' => 'G08', 'nama_gejala' => 'Gusi mudah berdarah'],
            ['id_gejala' => 'G09', 'nama_gejala' => 'Kelenjar getah bening di bagian bawah rahang sering bengkak'],
            ['id_gejala' => 'G10', 'nama_gejala' => 'Nyeri pada saat menelan makanan'],
            ['id_gejala' => 'G11', 'nama_gejala' => 'Nyeri pada mulut'],
            ['id_gejala' => 'G12', 'nama_gejala' => 'Kehilangan selera makan'],
            ['id_gejala' => 'G13', 'nama_gejala' => 'Bengkak pada gusi'],
            ['id_gejala' => 'G14', 'nama_gejala' => 'Sakit pada saat membuka mulut'],
            ['id_gejala' => 'G15', 'nama_gejala' => 'Pada sudut mulut pecah-pecah dan kemerahan'],
            ['id_gejala' => 'G16', 'nama_gejala' => 'Radang pada lidah'],
            ['id_gejala' => 'G17', 'nama_gejala' => 'Pembengkakan kelenjar getah bening di leher'],
            ['id_gejala' => 'G18', 'nama_gejala' => 'Permukaan lidah halus'],
            ['id_gejala' => 'G19', 'nama_gejala' => 'Sakit saat mengunyah makanan'],
            ['id_gejala' => 'G20', 'nama_gejala' => 'Lidah berwarna merah keputihan'],
            ['id_gejala' => 'G21', 'nama_gejala' => 'Alergi pada pasta gigi dan obat kumur'],
            ['id_gejala' => 'G22', 'nama_gejala' => 'Nyeri saat gigi tertekan oleh makanan'],
            ['id_gejala' => 'G23', 'nama_gejala' => 'Sulit mengunyah, menelan, dan berbicara'],
            ['id_gejala' => 'G24', 'nama_gejala' => 'Ujung gusi mengalami pengikisan'],
            ['id_gejala' => 'G25', 'nama_gejala' => 'Bintik kuning, putih, di dalam mulut'],
            ['id_gejala' => 'G26', 'nama_gejala' => 'Kulit terkelupas'],
            ['id_gejala' => 'G27', 'nama_gejala' => 'Pusing'],
            ['id_gejala' => 'G28', 'nama_gejala' => 'Pendarahan apabila gusi tergores'],
            ['id_gejala' => 'G29', 'nama_gejala' => 'Timbul kerak yang berlebihan'],
            ['id_gejala' => 'G30', 'nama_gejala' => 'Tubuh terasa meriang dan pegal-pegal'],
            ['id_gejala' => 'G31', 'nama_gejala' => 'Merintih kecil'],
            ['id_gejala' => 'G32', 'nama_gejala' => 'Bibir terasa kering'],
            ['id_gejala' => 'G33', 'nama_gejala' => 'Luka terbuka lebar pada mulut'],
            ['id_gejala' => 'G34', 'nama_gejala' => 'Gusi berwarna merah terang'],
            ['id_gejala' => 'G35', 'nama_gejala' => 'Banyak luka terbuka berwarna putih dan kuning pada mulut'],
            ['id_gejala' => 'G36', 'nama_gejala' => 'Perih di sekitar luka pada mulut'],
            ['id_gejala' => 'G37', 'nama_gejala' => 'Sakit dan bercak gatal di mulut dan kulit'],
            ['id_gejala' => 'G38', 'nama_gejala' => 'Perbedaan warna pada kulit sekitar mulut'],
            ['id_gejala' => 'G39', 'nama_gejala' => 'Kesemutan pada wilayah bibir'],
            ['id_gejala' => 'G40', 'nama_gejala' => 'Gusi menyerupai keju'],
            ['id_gejala' => 'G41', 'nama_gejala' => 'Di dalam mulut seperti terdapat kapas'],
            ['id_gejala' => 'G42', 'nama_gejala' => 'Gatal dan iritasi pada bagian bibir dan mulut'],
            ['id_gejala' => 'G43', 'nama_gejala' => 'Rasa nyeri dan sakit pada bibir dan mulut'],
            ['id_gejala' => 'G44', 'nama_gejala' => 'Muncul nanah pada mulut'],
            ['id_gejala' => 'G45', 'nama_gejala' => 'Pusing dan meriang'],
            ['id_gejala' => 'G46', 'nama_gejala' => 'Lecet pada bibir dan mulut'],
            ['id_gejala' => 'G47', 'nama_gejala' => 'Nyeri pada gusi'],
            ['id_gejala' => 'G48', 'nama_gejala' => 'Sakit tenggorokan'],
            ['id_gejala' => 'G49', 'nama_gejala' => 'Terjadi papular, lesi vesikular pada mukosa mulut'],
            ['id_gejala' => 'G50', 'nama_gejala' => 'Terjadi popular, lesi vesikular pada mukosa faringeal'],
        ];

        Gejala::insert($gejala);

        // Insert Data Penyakit
        $penyakits = [
            ['id_penyakit' => 'P01', 'nama_penyakit' => 'Gingivitis'],
            ['id_penyakit' => 'P02', 'nama_penyakit' => 'Tench Mouth'],
            ['id_penyakit' => 'P03', 'nama_penyakit' => 'Kandidiasis'],
            ['id_penyakit' => 'P04', 'nama_penyakit' => 'Abses Periodental'],
            ['id_penyakit' => 'P05', 'nama_penyakit' => 'Glositis'],
            ['id_penyakit' => 'P06', 'nama_penyakit' => 'Abses Periapikal'],
            ['id_penyakit' => 'P07', 'nama_penyakit' => 'Herpes Labialis'],
            ['id_penyakit' => 'P08', 'nama_penyakit' => 'Herpes Zoster'],
            ['id_penyakit' => 'P09', 'nama_penyakit' => 'Stomatitis'],
            ['id_penyakit' => 'P10', 'nama_penyakit' => 'Gingivostomatitis'],
            ['id_penyakit' => 'P11', 'nama_penyakit' => 'Herpangina'],
        ];

        Penyakit::insert($penyakits);

        // Insert Data Aturan
        $aturan = [
            [
                'gejalas_ids' => ['G01', 'G02', 'G05', 'G06', 'G07'],
                'penyakit_ids' => ['P01']
            ],
            [
                'gejalas_ids' => ['G03', 'G04', 'G08', 'G09', 'G45'],
                'penyakit_ids' => ['P02']
            ],
            [
                'gejalas_ids' => ['G15', 'G25', 'G28', 'G40', 'G41'],
                'penyakit_ids' => ['P03']
            ],
            [
                'gejalas_ids' => ['G11', 'G13', 'G19', 'G44'],
                'penyakit_ids' => ['P04']
            ],
            [
                'gejalas_ids' => ['G16', 'G18', 'G20', 'G21', 'G23'],
                'penyakit_ids' => ['P05']
            ],
            [
                'gejalas_ids' => ['G10', 'G14', 'G17', 'G22', 'G47'],
                'penyakit_ids' => ['P06']
            ],
            [
                'gejalas_ids' => ['G26', 'G29', 'G39', 'G43', 'G46'],
                'penyakit_ids' => ['P07']
            ],
            [
                'gejalas_ids' => ['G30', 'G31', 'G33', 'G38', 'G50'],
                'penyakit_ids' => ['P08']
            ],
        ];

        // Insert aturan ke dalam database
        foreach ($aturan as $rule) {
            Aturan::create([
                'gejalas_ids' => json_encode($rule['gejalas_ids']),
                'penyakit_ids' => json_encode($rule['penyakit_ids'])
            ]);
        }
    }
}
