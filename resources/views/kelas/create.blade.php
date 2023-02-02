@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH DATA KELAS</h2>
    <form method="post" action="/kelas/store">
    @csrf {{--  --}}
    <table width="50%">
        <tr>
            <td class="25%">KELAS</td>
            <td>
                <input type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td class="25%">JURUSAN</td>
            <td class="25%">
                <select name="jurusan_id">
                    <option></option>
                    @foreach ($jurusan as $j)
                        <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>                        
                    @endforeach
                </select>
                {{-- <input type="text" name="jurusan_id"></td> --}}
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">SIMPAN</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>
@endsection