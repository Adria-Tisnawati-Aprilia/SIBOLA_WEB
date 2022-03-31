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
                    <h4 class="card-title">Tambah Hak Akses</h4>
                    <form class="form" method="post">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="feedback1" class="sr-only">Kode Lapangan</label>
                                <input type="text" id="feedback1" class="form-control" placeholder="Kode Lapangan"
                                name="kde lapangan">
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
                            <td>
                                <a href="" class="btn btn-warning">
                                    Edit
                                </a>
                                <form method="post" action="{{ url('/owner/lapangan/'.$data->id) }}" style="display:inline">
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


