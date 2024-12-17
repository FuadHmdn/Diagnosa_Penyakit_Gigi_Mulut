<h2>Hasil Diagnosa</h2>

@if(count($penyakit) > 0)
    <ul>
        @foreach($penyakit as $penyakitItem)
            <li>{{ $penyakitItem->nama_penyakit }}</li>
        @endforeach
    </ul>
@else
    <p>Tidak ada penyakit yang cocok dengan gejala yang Anda pilih.</p>
@endif
