<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama"> Nama </label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $edit->getUsers->nama }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email"> Email </label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{ $edit->getUsers->email }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_hp"> No. HP </label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="0" value="{{ $edit->getUsers->no_hp }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tanggal_bergabung"> Tanggal Bergabung </label>
            <input type="date" name="tanggal_bergabung" id="tanggal_bergabung" class="form-control" placeholder="Masukkan Tanggal" value="{{ $edit->getUsers->no_hp }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="alamat_owner"> Alamat Owner </label>
            <textarea name="alamat_owner" id="alamat_owner" class="form-control" placeholder="Masukkan Alamat Owner" rows="5">{{ $edit->getUsers->alamat }}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="alamat"> Alamat Arena </label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" rows="5">{{ $edit->alamat_owner }}</textarea>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="logo_owner"> Logo </label>
    <input type="file" name="logo_owner" id="logo_owner" class="form-control" placeholder="Masukkan Logo">
</div>
<div class="form-group">
    <label for="foto_owner"> Foto </label>
    <input type="file" name="foto_owner" id="foto_owner" class="form-control" placeholder="Masukkan Foto">
</div>
