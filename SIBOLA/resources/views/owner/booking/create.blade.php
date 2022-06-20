@extends("admin.layout.baground")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
</ol>
@endsection

@section("konten")
<section class="content-header">
    <h1>
        Booking
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h5>
                        <i class="fa fa-plus"></i> Tambah Data
                    </h5>
                </div>
                <div class="box-body">
                    <form action="{{ url('/owner/booking') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="kode_booking"> Kode Booking </label>
                                <input type="text" id="kode_booking" name="kode_booking" class="form-control"
                                    placeholder="Masukkan Kode Booking">
                            </div>
                            <div class="form-group">
                                <label for="kode_arena"> Kode Arena </label>
                                <select name="kode_arena" class="form-control" id="kode_arena">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_arena as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->nama_arena }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_lapangan"> Kode Lapangan </label>
                                <select name="kode_lapangan" class="form-control" id="kode_lapangan">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_lapangan as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->nama_lapangan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_booking"> Tanggal Booking </label>
                                <input type="date" id="tanggal_booking" name="tanggal_booking" class="form-control"
                                    placeholder="Masukkan Jenis Lapangan">
                            </div>
                            <div class="form-group">
                                <label for="harga"> Harga </label>
                                <input type="double" id="harga" name="harga" class="form-control"
                                    placeholder="Masukkan Jenis Lapangan">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-times"></i> Batal
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section("script_js")

<script type="text/javascript">
    function editBooking(kode_booking) {
        $.ajax({
            url : "{{ url('/owner/booking/edit') }}",
            type : "GET",
            data : { kode_booking : kode_booking },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>
@endsection
