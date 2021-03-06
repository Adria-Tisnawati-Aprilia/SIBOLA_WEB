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
        Event
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Event </a></li>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach($data_event as $data)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $data->getIdUser->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <button onclick="editEvent('{{ $data->kode_arena }}')" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
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
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ url('/owner/event') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_arena" class="sr-only">Nama Arena</label>
                        <input type="text" id="nama_arena" class="form-control" placeholder="Nama Arena"
                        name="nama_arena">
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="sr-only">No HP</label>
                        <input type="text" id="no_hp" class="form-control" placeholder="No Hp"
                        name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" id="email" class="form-control" placeholder="Email"
                        name="emai">
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
    function editEvent(event) {
        $.ajax({
            url : "{{ url('/owner/event/event') }}",
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
