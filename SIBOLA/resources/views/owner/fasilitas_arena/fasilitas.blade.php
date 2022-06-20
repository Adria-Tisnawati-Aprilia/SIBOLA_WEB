@extends('admin.layout.baground')

@section('title', 'Fasilitas Arena')

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
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-plus"></i> Tambah Data
                        </h3>
                    </div>
                    <form action="{{ url('/owner/fasilitas_arena') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fasilitas_arena"> Fasilitas Arena </label>
                                <select name="id_fasilitas" class="form-control" id="id_fasilitas">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_fasilitas as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->fasilitas }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_arena"> Arena </label>
                                <select name="kode_arena" class="form-control" id="kode_arena">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_arena as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->nama_arena }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
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
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            Data @yield('title')
                        </h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Fasilitas Arena</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_fasilitas_arena as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->fasilitas_arena }}</td>
                                        <td class="text-center">
                                            <button onclick="editFasilitas({{ $data->id }})" type="button"
                                                class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modal-default">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <form action="{{ url('/owner/fasilitas_arena/' . $data->id) }}" method="POST"
                                                style="display: inline;">
                                                @method('DELETE')
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

    <!-- Edit Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"> Edit Data </h4>
                </div>
                <form action="{{ url('/owner/fasilitas_arena/simpan') }}" method="POST">
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
        function editFasilitasArena(id) {
            $.ajax({
                url: "{{ url('/owner/fasilitas_arena/edit') }}",
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
    </script>
@endsection
