@extends("admin.layout.baground")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
</ol>
@endsection

@section("konten")
<div class="row">
    <div class>
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#default">
                    Tambah Data
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id User</th>
                            <th>Nama Arena</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach($data_arena as $data)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $data->getIdUser->nama }}</td>
                            <td>{{ $data->nama_arena }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <button onclick="editArena({{ $data->kode_arena }})" type="button" class="btn btn-warning block" data-bs-toggle="modal" data-bs-target="#default-edit">
                                    Edit
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

<!-- Tambah Data -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ url('/owner/arena') }}" method="post">
                {{ csrf_field() }}
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
                        <label for="alamat" class="sr-only">Alamat</label>

                        <div class="form-group form-label-group">
                            <textarea class="form-control" id="alamat" rows="3"
                            placeholder="Alamat" name="alamat"></textarea>
                            <label for="label-textarea"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Kembali</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" >
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tambah</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

<!-- Edit Data -->
<div class="modal fade text-left" id="default-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ url('/owner/arena/simpan') }}" method="post">
                @method("put")
                {{ csrf_field() }}
                <div class="modal-body" id="konten"></div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Kembali</span>
                    </button>
                    <button type="submit" class="btn btn-success ml-1" >
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

@endsection

@section("scripts")

<script type="text/javascript">
    function editArena(kode_arena) {
        $.ajax({
            url : "{{ url('/owner/arena/edit_arena') }}",
            type : "GET",
            data : { kode_arena : kode_arena },
            success : function(data) {
                $("#konten").html(data);
                return true;
            }
        });
    }
</script>
@endsection
