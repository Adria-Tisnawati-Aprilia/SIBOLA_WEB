@php
use Carbon\Carbon;
@endphp
@extends('admin.layout.baground')

@section('title', 'Home')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
    </ol>
@endsection

@section('konten')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Selamat Datang </h4>
                    Anda Login Sebagai <strong>{{ Auth::user()->nama }}</strong>. Silahkan Pilih Menu Untuk Memulai
                    Program
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-edit"></i> Data Informasi Login
                        </h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th class="text-center">Login Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_informasi_login as $data)
                                    @php

                                        $dataTime = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at);
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->nama }}</td>
                                        <td class="text-center">{{ $dataTime->diffForHumans() }}</td>
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
