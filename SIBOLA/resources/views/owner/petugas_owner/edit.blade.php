<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="oldGambar" value="{{ $edit->getUsers->foto }}">
<div class="form-group">
    <label for="nama"> Nama </label>
    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
        value="{{ $edit->getUsers->nama }}">
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email"> Email </label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                value="{{ $edit->getUsers->email }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_ho"> No. HP </label>
            <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No. HP"
                min="1" value="{{ $edit->getUsers->no_hp }}">
        </div>
    </div>
</div>
<div class="form-group">
    <label for="alamat"> Alamat </label>
    <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat">{{ $edit->getUsers->alamat }}</textarea>
</div>
<div class="form-group">
    <label for="foto"> Foto </label>
    @if (empty($edit->getUsers->foto))
        <img class="gambar-preview img-fluid" id="tampilGambar" width="100%">
    @else
        <img src="{{ url('/storage/' . $edit->getUsers->foto) }}" class="gambar-preview img-fluid" id="tampilGambar"
            width="100%">
    @endif

    <input onchange="previewImage()" type="file" class="form-control" name="foto" id="foto">
</div>
