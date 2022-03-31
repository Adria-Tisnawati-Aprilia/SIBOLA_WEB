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
                                <label for="feedback1" class="sr-only">Kode Booking</label>
                                <input type="text" id="feedback1" class="form-control" placeholder="Kode Booking"
                                    name="kode booking">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Tanggal Booking</label>
                                <input type="date" id="feedback4" class="form-control" placeholder="Tanggal Booking"
                                    name="tanggal booking">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Tanggal Main</label>
                                <input type="date" id="feedback4" class="form-control" placeholder="Tanggal Main"
                                    name="tanggal main">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Nama Arena</label>
                                <input type="text" id="feedback4" class="form-control" placeholder="Nama Arena"
                                    name="nama arena">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Kode Lapangan</label>
                                <input type="text" id="feedback4" class="form-control" placeholder="Foto"
                                    name="kode lapangan">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Id Users</label>
                                <input type="text" id="feedback4" class="form-control" placeholder="Id Users"
                                    name="id users">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">No Jadwal</label>
                                <input type="number" id="feedback4" class="form-control" placeholder="No Jadwal"
                                    name="no jadwal">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Dp</label>
                                <input type="number" id="feedback4" class="form-control" placeholder="Dp"
                                    name="dp">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Status Dp</label>
                                <input type="text" id="feedback4" class="form-control" placeholder="Status Dp"
                                    name="status dp">
                            </div>
                            <div class="form-group">
                                <label for="feedback4" class="sr-only">Bukti</label>
                                <input type="text" id="feedback4" class="form-control" placeholder="Bukti"
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Id Users</th>
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
                                <form method="post" action="{{ url('/admin/hak_akses/'.$data->id) }}" style="display:inline">
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
                                <form method="post" action="{{ url('/admin/users/'.$data->id) }}" style="display:inline">
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
                                <form method="post" action="{{ url('/admin/users/'.$data->id) }}" style="display:inline">
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


