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
        Lapangan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lapangan</li>
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
                                <th>Kode Lapangan</th>
                                <th>Kode Arena</th>
                                <th>Nama Lapangan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                            @foreach($data_lapangan as $data)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $data->kode_lapangan }}</td>
                                <td>{{ $data->kode_arena }}</td>
                                <td>{{ $data->nama_lapangan }}</td>
                                <td>{{ $data->harga }}</td>
                                <td class="text-center">
                                    <button onclick="editLapangan('{{ $data->kode_lapangan }}')" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <form method="post" action="{{ url('/owner/lapangan/'.$data->kode_lapangan) }}" style="display:inline">
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
            <form action="{{ url('/owner/lapangan') }}" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="kode_lapangan" class="sr-only">Kode Lapangan</label>
                        <input type="text" id="kode_lapangan" class="form-control" placeholder="Kode Lapangan"
                        name="kode_lapangan">
                    </div>
                    <div class="form-group">
                        <label for="kode_arena" class="sr-only">Kode Arena</label>
                        <select name="kode_arena" class="form-control" id="kode_arena">
                            <option value="">- Pilih -</option>
                            @foreach ($data_arena as $data)
                            <option value="{{ $data->kode_arena }}">
                                {{ $data->nama_arena }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_lapangan" class="sr-only">Nama Lapangan</label>
                        <input type="text" id="nama_lapangan" class="form-control" placeholder="Nama Lapangan"
                        name="nama_lapangan">
                    </div>
                    <div class="form-group">
                        <label for="alas_lapangan" class="sr-only">Alas Lapangan</label>
                        <input type="text" id="alas_lapangan" class="form-control" placeholder="Alas Lapangan"
                        name="alas_lapangan">
                    </div>
                    <div class="form-group">
                        <label for="id_jenis_lapangan" class="sr-only">Id Jenis Lapangan</label>
                        <input type="text" id="id_jenis_lapangan" class="form-control" placeholder="Id Jenis Lapangan"
                        name="id_jenis_lapangan">
                    </div>
                    <div class="form-group">
                        <label for="ukuran" class="sr-only">Ukuran</label>
                        <input type="text" id="ukuran" class="form-control" placeholder="ukuran"
                        name="ukuran">
                    </div>
                    <div class="form-group">
                        <label for="harga" class="sr-only">Harga</label>
                        <input type="double" id="harga" class="form-control" placeholder="Harga"
                        name="harga">
                    </div>
                    <div class="form-group">
                        <label for="status" class="sr-only">Status</label>
                        <input type="text" id="status" class="form-control" placeholder="Status"
                        name="status">
                    </div>
                    <div class="form-group">
                        <label for="id_kategori_lapangan" class="sr-only">Id Kategori Lapangan</label>
                        <input type="text" id="id_kategori_lapangan" class="form-control" placeholder="Id Kategori Lapangan"
                        name="id_kategori_lapangan">
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
            <form action="{{ url('/owner/lapangan/simpan') }}" method="POST">
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
    function editLapangan(kode_lapangan) {
        $.ajax({
            url : "{{ url('/owner/lapangan/edit_lapangan') }}",
            type : "GET",
            data : { kode_lapangan : kode_lapangan },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>
@endsection
