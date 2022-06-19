<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="id"> Id </label>
    <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Id" value="{{ $edit->id }}">
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="tanggal_bergabung"> Tanggal Bergabung </label>
    <input type="date" name="tanggal_bergabung" id="tanggal_bergabung" class="form-control" placeholder="Masukkan Tanggal" value="{{ $edit->tanggal_bergabung }}">
</div>

<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="alamat"> Alamat </label>
    <input type="alamat" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ $edit->alamat }}">
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="logo_owner"> Logo </label>
    <input type="file" name="logo_owner" id="logo_owner" class="form-control" placeholder="Masukkan Logo" value="{{ $edit->logo_owner }}">
</div>
