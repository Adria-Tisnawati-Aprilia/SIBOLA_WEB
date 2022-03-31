@extends('errors::minimal')

@section('title', __('Tidak Bisa Masuk'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Tidak Bisa Masuk'))
