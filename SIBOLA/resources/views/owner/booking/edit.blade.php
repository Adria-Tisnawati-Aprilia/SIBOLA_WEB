<div class="form-group">
    <label for="kode_booking"> Kode Booking</label>
    <input type="text" name="kode_booking" id="kode_booking" class="form-control" placeholder="Masukkan Kode Booking" value="{{ $edit_booking->kode_booking }}" readonly>
</div>
<div class="form-group">
    <label for="tanggal_booking"> Tanggal Booking</label>
    <input type="text" name="tanggal_booking" id="tanggal_booking" class="form-control" placeholder="Masukkan Tanggal Booking" value="{{ $edit_booking->tanggal_booking }}">
</div>
<div class="form-group">
    <label for="tanggal_main">  Tanggal Main </label>
    <input type="text" name="tanggal_main" id="tanggal_main" class="form-control" placeholder="Masukkan Tanggal Main" value="{{ $edit_booking->tanggal_main }}">
</div>
<div class="form-group">
    <label for="no_jadwal"> No Jadwal</label>
    <input type="text" name="no_jadwal" id="no_jadwal" class="form-control" placeholder="Masukkan Nama Arena" value="{{ $edit_booking->no_jadwal }}">
</div>
<div class="form-group">
    <label for="status_dp"> Status DP</label>
    <input type="text" name="status_dp" id="status_dp" class="form-control" placeholder="Masukkan Status DP" value="{{ $edit_booking->status_dp }}">
</div>
