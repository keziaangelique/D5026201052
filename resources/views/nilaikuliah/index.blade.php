@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')

@section('konten')

    <div class="container my-5">
        <h3>Data Nilai Kuliah</h3>

        <div class="row ">
            <div class="col-12 d-flex justify-content-end">
                <a href="/nilaikuliah/tambah" class="btn btn-md btn-primary mb-3"> + Tambah Data Nilai</a>
            </div>
        </div><br/>

    <table  class="table table-hover table-bordered align-middle text-center">
    <tr>
    <th width="10%">ID</th>
    <th width="20%">NRP</th>
    <th width="20%">Nilai Angka</th>
    <th width="10%">SKS</th>
    <th width="10%">Nilai Huruf</th>
    <th width="10%">Bobot</th>
    <th width="10%">Opsi</th>
    </tr>
    @foreach($nilaikuliah as $n)
    <tr>
    <td>{{ $n->ID }}</td>
    <td>{{ $n->NRP }}</td>
    <td>{{ $n->NilaiAngka }}</td>
    <td>{{ $n->SKS }}</td>
    <td>
        <?php
            if($n->NilaiAngka <=40){
                echo "D";
            } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                echo "C";
            } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                echo "B";
            } else{
                echo "A";
            }
            ?>
    </td>
    <td>{{ $n->NilaiAngka*$n->SKS }}</td>

    <td><a class="btn btn-danger btn-md" href="/nilaikuliah/hapus/{{ $n->ID }}">Hapus</a></td>


    </tr>
    @endforeach
    </table>

    {{-- {{ $nilaikuliah->links() }} --}}

    </div>
@endsection
