@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>EDIT DATA JURUSAN</h2>
    <form method="post" action="/jurusan/update/ {{ $jurusan->id }}">
    @csrf {{--  --}}
    <table width="50%">
        <tr>
            <td class="bar">Nama Jurusan</td>
            <td class="bar">
                <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">UBAH</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>
@endsection