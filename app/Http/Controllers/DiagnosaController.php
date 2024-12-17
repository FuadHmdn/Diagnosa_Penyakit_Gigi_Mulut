<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        // Ambil semua gejala untuk ditampilkan di form
        $gejalas = Gejala::all();
        return view('form_diagnosa', compact('gejalas'));
    }

    public function diagnosa(Request $request)
    {
        $gejalaIds = $request->input('gejala');
        $penyakit = [];

        // Ambil semua aturan dari database
        $aturan = Aturan::all();

        // Loop melalui setiap aturan untuk mencari kecocokan dengan gejala yang dipilih
        foreach ($aturan as $rule) {
            $ruleGejalas = json_decode($rule->gejalas_ids); // Ambil gejala dari aturan

            // Periksa apakah semua gejala pada aturan cocok dengan gejala yang dipilih
            if (empty(array_diff($ruleGejalas, $gejalaIds))) {
                // Ambil penyakit berdasarkan ID yang terkait
                $penyakitIds = json_decode($rule->penyakit_ids);
                foreach ($penyakitIds as $penyakitId) {
                    $penyakitData = Penyakit::find($penyakitId);
                    if ($penyakitData) {
                        $penyakit[] = $penyakitData;
                    }
                }
            }
        }

        // Kirim data penyakit ke view hasil diagnosa
        return view('hasil_diagnosa', compact('penyakit'));
    }
}
