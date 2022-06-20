@extends('admin.layout.baground')

@section('title', 'Owner')

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
                                    <th class="text-center">Tanggal Bergabung</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=0 @endphp
                                @foreach ($data_owner as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->getUsers->nama }}</td>
                                        <td>{{ $data->getUsers->email }}</td>
                                        <td class="text-center">{{ $data->tanggal_bergabung }}</td>
                                        <td>{{ $data->alamat_owner }}</td>
                                        <td class="text-center">
                                            <button onclick="editOwner({{ $data->id }})" type="button"
                                                class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modal-default">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <form method="post" action="{{ url('/admin/owner/owner' . $data->id) }}"
                                                style="display:inline">
                                                @method('delete')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm">
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
                <form action="{{ url('/admin/owner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp"> No. HP </label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_bergabung"> Tanggal Bergabung </label>
                                    <input type="date" name="tanggal_bergabung" id="tanggal_bergabung"
                                        class="form-control" placeholder="Masukkan Tanggal">
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
                            <img class="gambar-preview img-fluid" width="100%" id="tampilGambar">
                            <input onchange="previewImage()" type="file" name="logo_owner" id="logo_owner"
                                class="form-control" placeholder="Masukkan Logo">
                        </div>
                        <div class="form-group">
                            <label for="foto_owner"> Foto </label>
                            <img class="gambar-preview-dua img-fluid" width="100%" id="tampilGambarDua">
                            <input onchange="previewImageDua()" type="file" name="foto_owner" id="foto_owner"
                                class="form-control" placeholder="Masukkan Foto">
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
        function editOwner(id) {
            $.ajax({
                url: "{{ url('/admin/owner/edit') }}",
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
            const image = document.querySelector("#logo_owner");
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

        function previewImageDua() {
            const image = document.querySelector("#foto_owner");
            const imgPreview = document.querySelector(".gambar-preview-dua");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambarDua").addClass('mb-3');
                $("#tampilGambarDua").width("100%");
                $("#tampilGambarDua").height("300");
            }
        }
    </script>

@endsection
