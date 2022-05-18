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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/hak_akses') }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="feedback1" class="sr-only">Kode Lapangan</label>
                            <input type="text" id="feedback1" class="form-control" placeholder="Kode Lapangan"
                            name="kode lapangan">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Kode Arena</label>
                        <input type="text" id="feedback4" class="form-control" placeholder="Kode Arena"
                        name="kode arena">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Nama Lapangan</label>
                        <input type="text" id="feedback4" class="form-control" placeholder="Nama Lapangan"
                        name="nama lapangan">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Alas Lapangan</label>
                        <input type="text" id="feedback4" class="form-control" placeholder="Alas Lapangan"
                        name="alas lapangan">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Foto</label>
                        <input type="file" id="feedback4" class="form-control" placeholder="Foto"
                        name="foto">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Harga</label>
                        <input type="number" id="feedback4" class="form-control" placeholder="Harga"
                        name="harga">
                    </div>
                    <div class="form-group">
                        <label for="feedback4" class="sr-only">Status</label>
                        <input type="text" id="feedback4" class="form-control" placeholder="Status"
                        name="status">
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
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    Data
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Lapangan</th>
                            <th>Nama Arena</th>
                            <th>Alas Lapangan</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=0 @endphp
                        @foreach($data_lapangan as $data)
                        <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td class="text-center">
                                <button onclick="editRole({{ $data->id }})" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <form action="{{ url('/admin/hak_akses/'.$data->id) }}" method="POST" style="display: inline;">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i> Hapus
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
@endsection
