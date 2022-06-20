<div class="form-group">
    <label for="kode_booking"> Kode Booking</label>
    <input type="text" name="kode_booking" id="kode_booking" class="form-control" placeholder="Masukkan Kode Booking" value="{{ $edit->kode_booking }}" readonly>
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="kode_arena"> Kode Arena </label>
    <input type="text" class="form-control" name="kode_arena" id="kode_arena" placeholder="Masukkan Kode Arena"
        value="{{ $edit->kode_arena }}">
</div>
<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="kode_lapangan"> Kode Lapangan </label>
    <input type="text" class="form-control" name="kode_lapangan" id="kode_lapangan" placeholder="Masukkan Kode Lapangan"
        value="{{ $edit->kode_lapangan }}">
</div>
<div class="form-group">
    <label for="tanggal_booking"> Tanggal Booking</label>
    <input type="date" name="tanggal_booking" id="tanggal_booking" class="form-control" placeholder="Masukkan Tanggal Booking" value="{{ $edit->tanggal_booking }}">
</div>
<div class="form-group">
    <label for="harga">  Harga </label>
    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="{{ $edit->harga }}">
</div>
