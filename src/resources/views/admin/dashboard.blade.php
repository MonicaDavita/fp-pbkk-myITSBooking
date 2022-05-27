@extends('layouts.app')

@section('content')
<section>
    <article class="container">
        <h1 class="mb-5 fw-bold">Daftar Peminjaman</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal booking</th>
                <th scope="col">Harga</th>
                <th scope="col">Durasi (jam)</th>
                <th scope="col">Jumlah partisipan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $tr)  
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ date('d/m/y', strtotime($transactions[0]->book_date)) }}</td>
                  <td>{{ $tr->facility->price * ceil($tr->duration / 2) }}</td>
                  <td>{{ $tr->duration }}</td>
                  <td>{{ $tr->participants }}</td>
                  <td>{{ $tr->description }}</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm">Lihat detail</button>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </article>
</section>
@endsection