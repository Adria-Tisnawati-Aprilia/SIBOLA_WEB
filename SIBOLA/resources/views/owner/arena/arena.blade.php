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
        Arena
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Arena</li>
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
                                <th>Id Owner</th>
                                <th>Nama Arena</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                            @foreach($data_arena as $data)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $data->kode_arena }}</td>
                                <td>{{ $data->nama_arena }}</td>
                                <td>{{ $data->id_owner }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ $data->foto }}</td>
                                <td>
                                    <button onclick="editArena('{{ $data->kode_arena }}')" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <form method="post" action="{{ url('/owner/arena/'.$data->kode_arena) }}" style="display:inline">
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
            <form action="{{ url('/owner/arena') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_arena" class="sr-only">Kode Arena</label>
                        <input type="text" id="kode_arena" class="form-control" placeholder="Kode Arena"
                        name="kode_arena">
                    </div>
                    <div class="form-group">
                        <label for="nama_arena" class="sr-only">Nama Arena</label>
                        <input type="text" id="nama_arena" class="form-control" placeholder="Nama Arena"
                        name="nama_arena">
                    </div>
                    <div class="form-group">
                        <label for="id_owner" class="sr-only">Id Owner</label>
                        <input type="text" id="id_owner" class="form-control" placeholder="Id Owner"
                        name="id_owner">
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="sr-only">No Hp</label>
                        <input type="text" id="no_hp" class="form-control" placeholder="No Hp"
                        name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="sr-only">Alamat</label>

                        <div class="form-group form-label-group">
                            <textarea class="form-control" id="alamat" rows="3"
                            placeholder="Alamat" name="alamat"></textarea>
                            <label for="label-textarea"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="sr-only">Deskripsi</label>
                        <input type="text" id="deskripsi" class="form-control" placeholder="Deskripsi"
                        name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="foto" class="sr-only">Foto</label>
                        <input type="file" id="foto" class="form-control" placeholder="Foto"
                        name="foto">
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
            <form action="{{ url('/owner/arena/simpan') }}" method="POST">
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
    function editArena(kode_arena) {
        $.ajax({
            url : "{{ url('/owner/arena/edit_arena') }}",
            type : "GET",
            data : { kode_arena : kode_arena },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>
@endsection
