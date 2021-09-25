@extends('layouts.adminlayout')
@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Admin Panel</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Pendaftar</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Default</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        
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
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Data Pendaftar</h6>
                                <h5 class="h3 mb-0">Tabel Pendaftar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                           <thead class="thead-light">
                              <tr>
                                 <th>Nama</th>
                                 <th>Email</th>
                                 <th>Tanggal Lahir</th>
                                 <th>Alamat</th>
                                 <th>Event</th>
                              </tr>
                           </thead>
                           <tbody>
                              @forelse($applicants as $applicant)
                              <tr>
                                 <td> {{ $applicant->nama }} </td>
                                 <td> {{ $applicant->email }} </td>
                                 <td> {{ $applicant->tanggal_lahir }}</td>
                                 <td> {{ $applicant->alamat }}</td>
                                 <td> {{ $applicant->eventname }} </td>
                                 
                              </tr>
                              @empty
                              <tr>
                                 <td colspan="17" align="center">Data Pendaftar Tidak diTemukan</td>
                              </tr>
                              @endforelse
                           </tbody>
                        </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
