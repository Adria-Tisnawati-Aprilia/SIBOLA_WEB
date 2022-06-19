<div class="form-group">
    <label for="kode_arena"> Kode Arena</label>
    <input type="text" name="kode_arena" id="kode_arena" class="form-control" placeholder="Masukkan Kode Arena" value="{{ $edit_arena->kode_arena }}" readonly>
</div>
<div class="form-group">
    <label for="nama_arena"> Nama Arena</label>
    <input type="text" name="nama_arena" id="nama_arena" class="form-control" placeholder="Masukkan Nama Arena" value="{{ $edit_arena->nama_arena }}">
</div>
<div class="form-group">
    <label for="id_owner"> Id Owner</label>
    <input type="text" name="id_owner" id="id_owner" class="form-control" placeholder="Masukkan Id Owner" value="{{ $edit_arena->id_owner }}">
</div>
<div class="form-group">
    <label for="no_hp"> No Hp</label>
    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No Hp" value="{{ $edit_arena->no_hp }}">
</div>
<div class="form-group">
    <label for="alamat">  Alamat </label>
    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ $edit_arena->alamat }}">
</div>
<div class="form-group">
    <label for="deskripsi"> Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" value="{{ $edit_arena->deskripsi }}">
</div>
<div class="form-group">
    <label for="foto"> Foto</label>
    <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukkan Foto" value="{{ $edit_arena->foto }}">
</div>
