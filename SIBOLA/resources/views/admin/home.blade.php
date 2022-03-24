@extends("admin.layout.baground")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
</ol>
@endsection

@section("konten")
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Quill.js Snow Editor</h4>
    </div>
    <div class="card-body">
        <p>Snow is a clean editor theme</p>
        <div id="snow">
            <p>Hello World!</p>
            <p>Some initial <strong>bold</strong> text</p>
            <p><br></p>

        </div>
    </div>
</div>
@endsection
