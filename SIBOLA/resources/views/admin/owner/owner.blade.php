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
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
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
                                <th>Id</th>
                                <th>Tanggal Bergabung</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>Logo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                            @foreach($data_owner as $data)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->tanggal_bergabung }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->alamat_owner }}</td>
                                <td>{{ $data->logo_owner }}</td>
                                <td>
                                    <button onclick="editOwner({{ $data->id }})" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <form method="post" action="{{ url('/admin/owner/owner'.$data->id) }}" style="display:inline">
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

<!-- Edit Data -->
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
            <form action="{{ url('/admin/owner') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp"> No. HP </label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_bergabung"> Tanggal Bergabung </label>
                                <input type="date" name="tanggal_bergabung" id="tanggal_bergabung" class="form-control" placeholder="Masukkan Tanggal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat_owner"> Alamat Owner </label>
                                <textarea name="alamat_owner" id="alamat_owner" class="form-control" placeholder="Masukkan Alamat Owner" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat"> Alamat Arena </label>
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="logo_owner"> Logo </label>
                        <input type="file" name="logo_owner" id="logo_owner" class="form-control" placeholder="Masukkan Logo">
                    </div>
                    <div class="form-group">
                        <label for="foto_owner"> Foto </label>
                        <input type="file" name="foto_owner" id="foto_owner" class="form-control" placeholder="Masukkan Foto">
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
<!-- END -->

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
            <form action="{{ url('/admin/owner/simpan') }}" method="POST">
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
<!-- END -->

@endsection

@section("script_js")

<script>
    function editOwner(id) {
        $.ajax({
            url : "{{ url('/admin/owner/edit') }}",
            type : "GET",
            data : { id : id },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>

@endsection
