@extends('admin.layout.baground')

@section('title', 'Users')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
    </ol>
@endsection

@section('konten')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('title')</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#modal-tambah">
                            <i class="fa fa-edit"></i> Tambah
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th class="text-center">No Hp</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=0 @endphp
                                @foreach ($data_user as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td class="text-center">{{ $data->no_hp }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td class="text-center">{{ $data->getHakAkses->nama }}</td>
                                        <td class="text-center">
                                            <button onclick="editUsers({{ $data->id }})" type="button"
                                                class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modal-default">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <form method="post" action="{{ url('/admin/users/' . $data->id) }}"
                                                style="display:inline">
                                                @method('delete')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">
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
                <form action="{{ url('/admin/users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp"> No Hp </label>
                                    <input type="number" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="Masukkan No Hp" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat"> Alamat </label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="5" placeholder="Masukkan Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto"> Foto </label>
                            <img class="gambar-preview img-fluid mt-3" id="tampilGambar">
                            <input onchange="previewImage()" type="file" name="foto" id="foto"
                                class="form-control">
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
                    @method('PUT')
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

@section('script_js')

    <script>
        function editUsers(id) {
            $.ajax({
                url: "{{ url('/admin/users/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            });
        }

        function previewImage() {
            const image = document.querySelector("#foto");
            const imgPreview = document.querySelector(".gambar-preview");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").width("100%");
                $("#tampilGambar").height("300");
            }
        }
    </script>

@endsection
