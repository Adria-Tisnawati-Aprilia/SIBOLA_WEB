@extends("admin.layout.baground")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
</ol>
@endsection

@section("konten")
    <div class="row">
        <div class="col-md-4">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Tambah Booking</h4>
                    <form class="form" method="post">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="kode_booking" class="sr-only">Kode Booking</label>
                                <input type="text" id="kode_booking" class="form-control" placeholder="Kode Booking"
                                    name="kode_booking">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_booking" class="sr-only">Tanggal Booking</label>
                                <input type="date" id="tanggal_booking" class="form-control" placeholder="Tanggal Booking"
                                    name="tanggal_booking">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_main" class="sr-only">Tanggal Main</label>
                                <input type="date" id="tanggal_main" class="form-control" placeholder="Tanggal Main"
                                    name="tanggal_main">
                            </div>
                            <div class="form-group">
                                <label for=""nama_arena class="sr-only">Nama Arena</label>
                                <input type="text" id="nama_arena" class="form-control" placeholder="Nama Arena"
                                    name="nama_arena">
                            </div>
                            <div class="form-group">
                                <label for="kode_lapangan" class="sr-only">Kode Lapangan</label>
                                <input type="text" id="kode_lapangan" class="form-control" placeholder="Foto"
                                    name="kode_lapangan">
                            </div>
                            <div class="form-group">
                                <label for="id_users" class="sr-only">Id Users</label>
                                <input type="text" id="id_users" class="form-control" placeholder="Id Users"
                                    name="id_users">
                            </div>
                            <div class="form-group">
                                <label for="no_jadwal" class="sr-only">No Jadwal</label>
                                <input type="number" id="no_jadwal" class="form-control" placeholder="No Jadwal"
                                    name="no_jadwal">
                            </div>
                            <div class="form-group">
                                <label for="dp" class="sr-only">Dp</label>
                                <input type="number" id="dp" class="form-control" placeholder="Dp"
                                    name="dp">
                            </div>
                            <div class="form-group">
                                <label for="status_dp" class="sr-only">Status Dp</label>
                                <input type="text" id="status_dp" class="form-control" placeholder="Status Dp"
                                    name="status_dp">
                            </div>
                            <div class="form-group">
                                <label for="bukti" class="sr-only">Bukti</label>
                                <input type="text" id="bukti" class="form-control" placeholder="Bukti"
                                    name="bukti">
                            </div>
                        </div>
                        <div class="form-actions d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                            <button type="reset" class="btn btn-light-primary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
                </div>
        </div>
        </div>

        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Tanggal Main</th>
                            <th>Tanggal Booking</th>
                            <th>Nama Arena</th>
                            <th>Status Dp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach($data_role as $data)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $data->nama }}</td>
                            <td>
                                <a href="" class="btn btn-warning">
                                    Edit
                                </a>
                                <form method="post" action="{{ url('/owner/booking/'.$data->kode_booking) }}" style="display:inline">
                                    @method("delete")
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a href="" class="btn btn-warning">
                                    Edit
                                </a>
                                <form method="post" action="{{ url('/owner/booking/'.$data->kode_booking) }}" style="display:inline">
                                    @method("delete")
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                            <td>{{ $data->id_users }}</td>
                            <td>
                                <a href="" class="btn btn-warning">
                                    Edit
                                </a>
                                <form method="post" action="{{ url('/owner/booking/'.$data->kode_booking) }}" style="display:inline">
                                    @method("delete")
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                </div>
        </div>
    </div>
@endsection


