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
                            <h4 class="card-title">Tambah Arena</h4>
                            <form class="form" method="post">
                                <div class="form-body">
                                    <form class="form" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="feedback1" class="sr-only">Kode Arena</label>
                                                <input type="text" id="feedback1" class="form-control" placeholder="Kode Arena"
                                                    name="kode arena">
                                            </div>
                                            <div class="form-group">
                                                <label for="feedback4" class="sr-only">Id User</label>
                                                <input type="text" id="feedback4" class="form-control" placeholder="Id User"
                                                    name="id user">
                                            </div>
                                            <div class="form-group">
                                                <label for="feedback2" class="sr-only">Nama Arena</label>
                                                <input type="name" id="feedback2" class="form-control" placeholder="Nama Arena"
                                                    name="nama arena">
                                            </div>
                                            <div class="form-group">
                                                <label for="feedback2" class="sr-only">Alamat</label>

                                            <div class="form-group form-label-group">
                                                <textarea class="form-control" id="label-textarea" rows="3"
                                                    placeholder="Alamat"></textarea>
                                                <label for="label-textarea"></label>
                                            </div>
                                        </div>
                                        <div class="form-actions d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-light-primary">Cancel</button>
                                        </div>
                                    </form>
                                <div class="form-actions d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-light-primary">Cancel</button>
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
                            <th>Id Hak Akses</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AB 01</td>
                            <td>Adria</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                    </tbody>
                </table>
            </div>
                </div>
        </div>
    </div>
@endsection


