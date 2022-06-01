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
                <th scope="col">Nama Tempat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $tr)  
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ date('d/m/y', strtotime($transactions[0]->book_date)) }}</td>
                  <td>{{ $tr->facility->name }}</td>
                  <td>{{ $tr->description }}</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaction" onClick="showDetailTransaction({{ $tr->id }});">Lihat detail</button>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </article>
</section>

<!-- Modal -->
<div class="modal fade" id="detailTransaction" tabindex="-1" aria-labelledby="detailTransactionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailTransactionLabel">Detail Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Data</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <p class="loading text-center mt-2 text-primary fw-semibold">loading...</p>
            <tr>
              <th class="table-detail" scope="row">Nama Pemesan</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Tanggal pemesanan</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Nama tempat</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Deskripsi</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Biaya</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Durasi</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Partisipan</th>
              <td></td>
            </tr>
            <tr>
              <th class="table-detail" scope="row">Dokumen terkait</th>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        <button type="button" class="btn btn-outline-danger">Tolak pesanan</button>
        <button type="button" class="btn btn-primary">Terima pesanan</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  function showDetailTransaction(id) { 
    const loading = document.getElementsByClassName('loading')[0];
    loading.classList.remove('d-none');

    const trTags = document.getElementsByClassName('table-detail');
    for(let i = 0; i < 8; i++)
          trTags[i].nextElementSibling.innerHTML = ''; // reset detail form

    fetch(`https://myitsbooking/admin/get-pemesanan/${id}`)
      .then(res => res.json())
      .then(res => {
        trTags[0].nextElementSibling.innerHTML = res.user.name;
        trTags[1].nextElementSibling.innerHTML = res.book_date;
        trTags[2].nextElementSibling.innerHTML = res.facility.name;
        trTags[3].nextElementSibling.innerHTML = res.description;
        trTags[4].nextElementSibling.innerHTML = res.facility.price * res.duration; // perlu dihitung dulu
        trTags[5].nextElementSibling.innerHTML = res.duration;
        trTags[6].nextElementSibling.innerHTML = res.participants;
        trTags[7].nextElementSibling.innerHTML = 'document'; // res.document;

        loading.classList.add('d-none');
      })
      .catch(err => console.log(err));
  }
</script>
@endsection