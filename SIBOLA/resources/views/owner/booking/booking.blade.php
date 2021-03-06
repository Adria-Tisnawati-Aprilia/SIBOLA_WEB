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
        Booking
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="{{url('/owner/booking/create')}}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
                <div class="box-body">
                    <table class="table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Booking</th>
                                <th>Kode Arena</th>
                                <th>Kode Lapangan</th>
                                <th>Tanggal Booking</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                            @foreach($data_booking as $data)
                            <tr>
                                <td>{{ ++$no }}.</td>
                                <td>{{ $data->kode_booking }}</td>
                                <td>{{ $data->kode_arena }}</td>
                                <td>{{ $data->kode_lapangan }}</td>
                                <td>{{ $data->tanggal_booking }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>
                                    <button onclick="editBooking('{{ $data->kode_booking }}')" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <form method="post" action="{{ url('/owner/booking/'.$data->kode_booking) }}" style="display:inline">
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
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
            <form action="{{ url('/owner/booking/simpan') }}" method="POST">
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
<!-- End -->

@endsection

@section("script_js")

<script type="text/javascript">
    function editBooking(kode_booking) {
        $.ajax({
            url : "{{ url('/owner/booking/edit') }}",
            type : "GET",
            data : { kode_booking : kode_booking },
            success : function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>
@endsection
