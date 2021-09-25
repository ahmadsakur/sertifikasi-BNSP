@extends('layouts.userlayout')
@section('content')
    <!-- Header -->
    <div class="header bg-success pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">User Panel</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Default</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        {{-- <button type="button" data-id="{{Auth::user()->id}}" data-name="{{Auth::user()->name}}"
                data-email="{{Auth::user()->email}}" data-toggle="modal" data-target="#accountModal"
                class="btn btn-sm btn-neutral" id="editAdminButton">Account</button>
                <button type="button" id="editSettingsButton" data-toggle="modal" data-target="#settingsModal"
                   data-id="{{$settings->id}}" class="btn btn-sm btn-neutral">Settings</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- page content --}}
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Data Siswa</h6>
                                <h5 class="h3 mb-0">Jumlah Siswa</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur
                            inventore, sequi unde sit et veritatis iste dolore est neque labore magnam nostrum corporis
                            eveniet facilis quam. Ab ad laudantium aliquam.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
