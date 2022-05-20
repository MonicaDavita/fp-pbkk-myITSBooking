@extends('layouts.app')

@section('content')
    <div class="">
        <div class="justify-content-center">
            <div class="d-lg-flex min-vh-100 w-100">
                <div class="col-lg-6 p-5">
                    <h1 class="fw-bold" style="color: #5d00d2">BOOKING</h1>
                    <h1 class="fw-bold">LAB PEMROGRAMAN</h1>
                    <H1 class="my-4 fw-bold" style="color: #5d00d2"><u>Syarat</u></H1>
                    <div class="d-flex fs-5 align-items-start">
                        <i class="bi bi-file-earmark pe-3"></i>
                        <p class="">Mengunduh dan melengkapi surat-surat yang
                            ada pada <a href="">intip.in/SuratDanBerkas</a></p>
                    </div>
                    <div class="d-flex fs-5 align-items-start">
                        <i class="bi bi-newspaper pe-3"></i>
                        <p class="">Menyiapkan proposal/ surat yang
                            menggambarkan kegiatan yang akan dilaksanakan pada LP</p>
                    </div>
                    <div class="d-flex fs-5 align-items-start">
                        <i class="bi bi-people-fill pe-3"></i>
                        <p class="">Partisipan kegiatan tidak boleh melebihi
                            40 orang</p>
                    </div>
                    <div class="d-flex fs-5 align-items-start">
                        <i class="bi bi-download pe-3"></i>
                        <p class="">Mengisi dan menyimpan bukti telah melakukan
                            pemesanan pada form di samping</p>
                    </div>
                    <div class="d-flex justify-content-center my-2">
                        <button class="btn btn-primary">AJUKAN PERTANYAAN</button>
                    </div>
                </div>
                <i class="fa-solid fa-calendar"></i>
                <div class="col-lg-6">
                    <form action="" class="d-grid gap-3 p-5">
                        <div class="input-group">
                            <input class="d-block col-6 mx-auto form-control" type="text" placeholder="Nama Lengkap">
                        </div>          
                        <div class="input-group">
                            <input class="d-block col-6 mx-auto form-control" type="text" placeholder="Nama Institusi">
                        </div>         
                        <div class="input-group">
                            <input class="d-block col-6 mx-auto form-control" type="text" placeholder="Deskripsi Singkat">
                        </div>    
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                            <input class="d-inline-block col-6 mx-auto form-control" type="date" placeholder="Tanggal Kegiatan"
                            name="tanggal">
                        </div>    
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-alarm"></i></span>
                            <input class="d-block col-6 mx-auto form-control" type="text" placeholder="Durasi Kegiatan (jam)">
                        </div>    
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-people"></i></span>
                            <input class="d-block col-6 mx-auto form-control" type="text" placeholder="Total Partisipan">
                        </div>
                    </form>
                    <div class="px-5">
                        <div class="d-flex justify-content-around">
                            <button class="col-4 btn btn-warning rounded">Upload Proposal</button>
                            <button class="col-4 btn btn-warning rounded">Upload Berkas</button>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <button class="col-10 btn btn-success rounded" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">BOOKING</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        {{-- TODO IF STATEMENT --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berhasil!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Booking berhasil dilakukan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
