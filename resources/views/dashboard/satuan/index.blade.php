 @extends('dashboard.layouts.main')
 @section('container')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Daftar Satuan</div>

                     <div class="card-body">
                         <a href="{{ route('satuan.create') }}" class="btn btn-primary">Tambah Satuan</a>
                         <br /><br />
                         <table class="table table-bordered">
                             <tr>
                                 <th>No</th>
                                 <th>Nama Satuan</th>
                                 <th>Aksi</th>
                             </tr>
                             @php
                                 $i = 0;
                             @endphp
                             @foreach ($satuans as $satuan)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $satuan->nama_satuan }}</td>
                                     <td>
                                         <form action="{{ route('satuan.destroy', $satuan->id) }}" method="POST">
                                             <a class="btn btn-primary"
                                                 href="{{ route('satuan.edit', $satuan->id) }}">Edit</a>
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger">Delete</button>
                                         </form>
                                     </td>
                                 </tr>
                             @endforeach
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
