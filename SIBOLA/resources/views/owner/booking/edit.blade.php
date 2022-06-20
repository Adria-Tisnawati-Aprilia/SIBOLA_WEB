<div class="form-group">
    <label for="kode_booking"> Kode Booking</label>
    <input type="text" name="kode_booking" id="kode_booking" class="form-control" placeholder="Masukkan Kode Booking" value="{{ $edit_booking->kode_booking }}" readonly>
</div>
<div class="form-group">
    <label for="kode_arena"> Arena </label>
    <select name="kode_arena" class="form-control" id="kode_arena">
        <option value="">- Pilih -</option>
        @foreach ($data_arena as $data)
        <option value="{{ $edit_booking->id }}">
            {{ $data->arena }}
        </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="kode_lapangan"> Kode Lapangan </label>
    <select name="kode_lapangan" class="form-control" id="kode_lapangan">
        <option value="">- Pilih -</option>
        @foreach ($data_lapangan as $data)
        <option value="{{ $edit_booking->id }}">
            {{ $data->lapangan }}
        </option>
        @endforeach
    </select>
<div class="form-group">
    <label for="tanggal_booking"> Tanggal Booking</label>
    <input type="date" name="tanggal_booking" id="tanggal_booking" class="form-control" placeholder="Masukkan Tanggal Booking" value="{{ $edit_booking->tanggal_booking }}">
</div>
<div class="form-group">
    <label for="harga">  Harga </label>
    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="{{ $edit_booking->harga }}">
</div>
