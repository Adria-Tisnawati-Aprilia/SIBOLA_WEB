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
        Laporan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Laporan</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">
                        <i class="fa fa-edit"></i> Tambah
                    </button>
                </div>
                <div class="box-body">
                    <table class="table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Arena</th>
                                <th>Tanggal Main</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                            @foreach($data_laporan as $data)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $data->getIdUser->nama }}</td>
                                <td>{{ $data->nama_arena }}</td>
                                <td>{{ $data->tgl_main }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <button onclick="editLaporan('{{ $data->kode_laporan }}')" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
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
</section>

<!-- Tambah Data -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-plus"></i> Tambah Data
                </h4>
            </div>
            <form action="{{ url('/owner/laporan') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_laporan" class="sr-only">Kode Laporan</label>
                        <input type="text" id="kode_laporan" class="form-control" placeholder="Kode Laporan"
                        name="kode_laporan">
                    </div>
                    <div class="form-group">
                        <label for="nama_arena" class="sr-only">Nama Arena</label>
                        <input type="text" id="nama_arena" class="form-control" placeholder="Nama Arena"
                        name="nama_arena">
                    </div>
                    <div class="form-group">
                        <label for="tgl_main" class="sr-only">Tanggal Main</label>
                        <input type="text" id="tgl_main" class="form-control" placeholder="Tanggal Main"
                        name="tgl_main">
                    </div>
                    <div class="form-group">
                        <label for="status" class="sr-only">Status</label>
                        <input type="text" id="status" class="form-control" placeholder="Status"
                        name="status">
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

<!-- Edit Data -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
            <form action="{{ url('/owner/laporan/simpan') }}" method="POST">
                @method("PUT")
                @csrf
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-save">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

@endsection

@section("script_js")

<script type="text/javascript">
    function editLaporan(kode_laporan) {
        $.ajax({
            url : "{{ url('/owner/laporan/edit_laporan') }}",
            type : "GET",
            data : { kode_laporan : kode_laporan },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>
@endsection
