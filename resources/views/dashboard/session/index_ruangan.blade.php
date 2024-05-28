 @extends('dashboard.layouts.main')
 @section('container')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Tambah ruangan</div>
                     <div class="card-body">
                         <form action="/store_ruangan" method="POST">
                             @csrf
                             <div class="form-group">
                                 <label for="nama_ruangan">Nama ruangan:</label>
                                 <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan"
                                     autocomplete="off">
                             </div>
                             <button type="submit" value="submit" class="btn btn-primary mt-3">Submit</button>
                         </form>
                     </div>
                 </div>
                 <div class="card">
                     <div class="card-header">Daftar ruangan</div>
                     <div class="card-body">
                         <table class="table table-bordered">
                             <tr>
                                 <th>No</th>
                                 <th>Nama ruangan</th>
                             </tr>
                             @php
                                 $i = 0;
                             @endphp
                             @foreach ($ruangans as $ruangan)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $ruangan['nama_ruangan'] }}</td>
                                 </tr>
                             @endforeach
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
