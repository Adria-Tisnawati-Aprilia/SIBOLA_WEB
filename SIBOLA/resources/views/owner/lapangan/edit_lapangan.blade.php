<div class="form-group">
    <label for="kode_lapangan"> Kode Lapangan </label>
    <input type="text" name="kode_lapangan" id="kode_lapangan" class="form-control" placeholder="Masukkan Kode Lapangan" value="{{ $edit_lapangan->kode_lapangan }}" readonly>
</div>
<div class="form-group">
    <label for="kode_arena"> Kode Arena </label>
    <select name="kode_arena" class="form-control" id="kode_arena">
        <option value="">- Pilih -</option>
        @foreach ($data_arena as $data)
        <option value="{{ $data->kode_arena }}" {{ ($data->kode_arena == $edit_lapangan->kode_arena) ? "selected" : "" }}>
            {{ $data->nama_arena }}
        </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="nama_lapangan"> Nama Lapangan </label>
    <input type="text" name="nama_lapangan" id="nama_lapangan" class="form-control" placeholder="Masukkan Nama Lapangan" value="{{ $edit_lapangan->nama_lapangan}}"
</div>
<div class="form-group">
    <label for="alas_lapangan"> Alas Lapangan</label>
    <input type="text" name="alas_lapangan" id="alas_lapangan" class="form-control" placeholder="Masukkan Alas Lapangan" value="{{ $edit_lapangan->alas_lapangan }}">
</div>
<div class="form-group">
    <label for="foto"> Foto </label>
    <input type="text" name="foto" id="foto" class="form-control" placeholder="Masukkan Foto" value="{{ $edit_lapangan->foto }}">
</div>
<div class="form-group">
    <label for="harga"> Harga </label>
    <input type="harga" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="{{ $edit_lapangan->harga }}">
</div>
