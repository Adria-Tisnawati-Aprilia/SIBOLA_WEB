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
                                <td>{{ $data->id_petugas }}</td>
                                <td>
                                    <a href="" class="btn btn-warning">
                                        Edit
                                    </a>
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
