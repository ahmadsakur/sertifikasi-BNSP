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
                                <li class="breadcrumb-item"><a href="#">Event</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Default</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button class="btn btn-sm btn-success" type="button" data-toggle="modal"
                           data-target="#addEventModal"><i class="fa fa-plus"
                              aria-hidden="true"></i><span>Insert</span></button>
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
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Data Event</h6>
                                <h5 class="h3 mb-0">Tabel Event</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                           <thead class="thead-light">
                              <tr>
                                 <th>Kode</th>
                                 <th>Nama</th>
                                 <th>Tanggal</th>
                                 <th>Detail</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @forelse($events as $event)
                              <tr>
                                 <td> {{ $event->kode }} </td>
                                 <td> {{ $event->nama }} </td>
                                 <td> {{ $event->tanggal }}</td>
                                 <td> {{ substr($event->detail,0,40)}}...</td>
                                 <td style="display: flex;">
                                    <button type="button" class="btn btn-sm btn-primary" id="editEventButton"
                                       data-toggle="modal" data-target="#editEventModal"
                                       data-id="{{$event->id}}">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger" id="deleteEventButton"
                                       data-toggle="modal" data-target="#deleteEventModal"
                                       data-destroy="{{$event->id}}">Delete</button></td>
                                 
                              </tr>
                              @empty
                              <tr>
                                 <td colspan="17" align="center">Data Event Tidak diTemukan</td>
                              </tr>
                              @endforelse
                           </tbody>
                        </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL --}}
    {{-- insert modal --}}
    <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Event</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="/events" method="POST">
               @csrf
               <div class="modal-body">
                  <div class="form-group">
                     <label for="nama">Nama Event</label>
                     <input type="text" class="form-control" name="nama" id="nama"
                        autocomplete="off" required>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="kode">Kode</label>
                        <input type="number" class="form-control" id="kode" name="kode" required autocomplete="off">
                     </div>
                     <div class="form-group col-md-8">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                           required autocomplete="off">
                     </div>
                  </div>
                  <div class="form-group">
                    <label for="detail">Detail Event</label>
                    <textarea class="form-control" id="detail" name="detail" rows="6"></textarea>
                 </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Insert</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   {{-- Update Event --}}
   <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('events.update','update') }}" method="POST">
                @method('PATCH')
                @csrf
               <div class="modal-body">
                <input type="hidden" name="id" id="edit-id">
                  <div class="form-group">
                     <label for="nama">Nama Event</label>
                     <input type="text" class="form-control" name="nama" id="edit-nama"
                        autocomplete="off" required>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="kode">Kode</label>
                        <input type="number" class="form-control" id="edit-kode" name="kode" required autocomplete="off">
                     </div>
                     <div class="form-group col-md-8">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="edit-tanggal" name="tanggal"
                           required autocomplete="off">
                     </div>
                  </div>
                  <div class="form-group">
                    <label for="detail">Detail Event</label>
                    <textarea class="form-control" id="edit-detail" name="detail" rows="6"></textarea>
                 </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Edit</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   {{-- Delete --}}
   <div class="modal fade" id="deleteEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Hapus Event</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form role="form" action="{{ route('events.destroy','delete') }}" method="POST">
               @method('DELETE')
               @csrf

               <div class="modal-body">
                  <h2>Anda Ingin Menghapus Data ?</h2>
                  <input type="hidden" name="id" id="delete-id">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
@push('customscripts')
<script>
   /* Edit Student Modal*/
   $(document).on('click','button#editEventButton',function(){
   let id = $(this).data('id');
   console.log(id)


   $.ajax({
      type: "get",
      url: 'events/'+id,
      dataType: 'json',
      success: function(res){
         console.log(res);
         
         $('#edit-id').val(res[0].id);
         $('#edit-nama').val(res[0].nama);
         $('#edit-kode').val(res[0].kode);
         $('#edit-tanggal').val(res[0].tanggal);
         $('#edit-detail').val(res[0].detail);

      }

   });

});
   //delete modal

   $(document).on('click','button#deleteEventButton',function(){
   let deleteID = $(this).data('destroy');
   $('#delete-id').val(deleteID);
   });

</script>
@endpush
