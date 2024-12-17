<form action="{{ route('diagnosa') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Pilih Gejala (Minimal 3, Maksimal 5):</label><br>
        @foreach ($gejalas as $gejala)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="gejala[]" value="{{ $gejala->id_gejala }}" id="gejala_{{ $gejala->id_gejala }}">
                <label class="form-check-label" for="gejala_{{ $gejala->id_gejala }}">{{ $gejala->nama_gejala }}</label>
            </div>
        @endforeach
        @error('gejala')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Diagnosa</button>
</form>
