<div class="form-group">
    <label for="id"> Id Pembayaran </label>
    <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Id Pembayaran" value="{{ $edit->id }}" readonly>
</div>
<div class="form-group">
    <label for="kode_booking"> Kode Booking </label>
    <input type="text" name="kode_booking" id="kode_booking" class="form-control" placeholder="Masukkan Nama Kode Booking" value="{{ $edit->kode_booking}}"
</div>
<div class="form-group">
    <label for="bukti_bayar"> Bukti Bayar </label>
    <input type="file" name="bukti_bayar" id="bukti_bayar" class="form-control" placeholder="Masukkan Bukti Bayar" value="{{ $edit->bukti_bayar }}">
</div>
<div class="form-group">
    <label for="id_users_booking"> Id Users </label>
    <input type="text" name="id_users_booking" id="id_users_booking" class="form-control" placeholder="Masukkan Id Users" value="{{ $edit->id_users_booking }}" readonly>
</div>
