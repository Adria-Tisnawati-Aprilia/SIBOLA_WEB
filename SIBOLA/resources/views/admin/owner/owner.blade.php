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
                            @foreach($data_user as $data)
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
                                    <form method="post" action="{{ url('/admin/owner/'.$data->id) }}" style="display:inline">
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
                    <div class="form-group">
                        <label for="id"> Id </label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Id">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_bergabung"> Tanggal Bergabung </label>
                        <input type="text" name="tanggal_bergabung" id="tanggal_bergabung" class="form-control" placeholder="Masukkan Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="status"> Status </label>
                        <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="logo_owner"> logo </label>
                        <input type="text" name="logo_owner" id="logo_owner" class="form-control" placeholder="Masukkan Logo">
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
            <form action="{{ url('/admin/users/simpan') }}" method="POST">
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
    function editUsers(id) {
        $.ajax({
            url : "{{ url('/admin/users/edit') }}",
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
