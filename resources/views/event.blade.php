@extends('layouts.auth')
@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-4">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Selamat Datang di Pusat Informasi Event Informatika</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                @forelse ($events as $item)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            {{-- <img class="card-img-top" src="https://via.placeholder.com/268" width="180" alt="Card image cap"> --}}
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->nama }}</h4>
                                <p class="card-text"><small class="text-muted mt-0 mb-0">{{ $item->tanggal }}</small>
                                </p>
                                <p class="card-text">{{ substr($item->detail, 0, 60) }}...</p>
                                <button class="btn btn-info" data-toggle="modal" data-target="#daftar" id="daftarEvent"
                                    data-id="{{ $item->id }}">Daftar</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center">Event Tidak ditemukan, mohon hubungi administrator</h1>
                @endforelse
            </div>
        </div>

    </div>

    {{-- modal --}}
    <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <form role="form" action="/daftar" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="number" class="form-control" id="edit-kode" name="kode" hidden>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="tanggal">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                    </form>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('customscripts')
    <script>
        $(document).on('click', 'button#daftarEvent', function() {
            let id = $(this).data('id');

            $.ajax({
                type: "get",
                url: 'detail/' + id,
                dataType: 'json',
                success: function(res) {
                    console.log(res);

                    $('#edit-kode').val(res[0].kode);

                }

            });
        });
    </script>
@endpush
