<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="nama"> Nama </label>
    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $edit->nama }}">
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="email"> Email </label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{ $edit->email }}">
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="hak_akses"> Hak Akses</label>
    <input type="text" name="hak_akses" id="hak_akses" class="form-control" placeholder="Masukkan Hak Akses" value="{{ $edit->hak_akses }}">
</div>
