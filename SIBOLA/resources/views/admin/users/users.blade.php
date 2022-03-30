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
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">Tambah Users</h4>
                                            <form class="form" method="post">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="feedback1" class="sr-only">Id Users</label>
                                                        <input type="text" id="feedback1" class="form-control" placeholder="Id Users"
                                                            name="id users">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="feedback4" class="sr-only">Nama</label>
                                                        <input type="text" id="feedback4" class="form-control" placeholder="Nama"
                                                            name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="feedback4" class="sr-only">Email</label>
                                                        <input type="email" id="feedback4" class="form-control" placeholder="Email"
                                                            name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="feedback4" class="sr-only">Password</label>
                                                        <input type="password" id="feedback4" class="form-control" placeholder="NPassword"
                                                            name="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="feedback4" class="sr-only">Id Hak Akses</label>
                                                        <input type="text" id="feedback4" class="form-control" placeholder="Id Hak Akses"
                                                            name="id hak askses">
                                                    </div>
                                                </div>
                                                <div class="form-actions d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                    <button type="reset" class="btn btn-light-primary">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection


