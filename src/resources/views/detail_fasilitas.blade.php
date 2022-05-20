@extends('layouts.app')

@section('content')
    <div class="">
        <div class="justify-content-center">
            <div class="d-lg-flex min-vh-100 w-100">
                <div class="col-lg-6">
                    {{-- <img class="img-fluid h-100" src="https://picsum.photos/600/360" alt=""> --}}
                    <div id="carouselControls" class="carousel slide h-100 w-100" data-bs-ride="carousel">
                        <div class="carousel-inner h-100 w-100">
                            <div class="carousel-item active h-100 w-100">
                                <img class="d-block h-100 w-100" src="https://picsum.photos/600/360" alt="First slide">
                            </div>
                            <div class="carousel-item h-100 w-100">
                                <img class="d-block h-100 w-100" src="https://picsum.photos/600/359" alt="Second slide">
                            </div>
                            <div class="carousel-item h-100 w-100">
                                <img class="d-block h-100 w-100" src="https://picsum.photos/600/358" alt="Third slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h1 class="fw-bold">Lab Pemrograman</h1>
                        <p class="fw-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, et
                            reprehenderit. Aspernatur praesentium illum voluptatibus pariatur sed, deserunt, amet in minima
                            numquam neque est maiores magnam corporis quisquam placeat cupiditate ex magni saepe, nemo
                            eveniet blanditiis sit maxime excepturi voluptatum! Consectetur tempore reprehenderit, vero
                            ullam sit reiciendis eligendi quae soluta nostrum nam corporis, commodi cumque velit nobis
                            provident aliquam explicabo dolore dolorum rerum! Quis, expedita, eligendi omnis accusantium
                            atque itaque qui, aspernatur soluta alias autem impedit perferendis voluptate cum maxime non
                            aliquam perspiciatis natus quod? Quo ipsa hic recusandae aperiam itaque harum iusto perferendis
                            nam nemo facere non labore, esse possimus! Rerum aspernatur modi magnam neque explicabo sint
                            quasi adipisci perspiciatis doloremque error earum repellendus ad, labore numquam eos
                            laboriosam?</p>
                    </div>
                    <div class="px-5">
                        <div class="d-flex justify-content-around">
                            <button class="col-4 btn btn-primary rounded">BOOKING</button>
                            <button class="col-4 btn btn-warning rounded">CEK KALENDER</button>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <button class="col-4 btn btn-danger rounded">LOKASI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
