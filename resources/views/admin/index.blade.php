@extends('admin.app')
@section('contentadmin')
<div class="pt-7">
    <h1>Welcome, {{ auth()->user()->name }}</h1>
    <h4>Semoga hari anda menyenangkan</h4>
</div>

@endsection