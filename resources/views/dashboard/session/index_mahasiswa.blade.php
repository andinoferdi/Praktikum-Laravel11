 @extends('dashboard.layouts.main')
 @section('container')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Tambah Mahasiswa</div>
                     <div class="card-body">
                         <form action="/store_mahasiswa" method="POST">
                             @csrf
                             <div class="form-group">
                                 <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                                 <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                                     autocomplete="off">
                                 <label for="nim">NIM:</label>
                                 <input type="number" class="form-control" id="nim" name="nim"
                                     autocomplete="off">
                             </div>
                             <button type="submit" value="submit" class="btn btn-primary mt-3">Submit</button>
                         </form>
                     </div>
                 </div>

                 <div class="card">
                     <div class="card-header">Daftar Mahasiswa</div>

                     <div class="card-body">
                         <table class="table table-bordered">
                             <tr>
                                 <th>No</th>
                                 <th>Nama Mahasiswa</th>
                                 <th>NIM</th>
                                 <th>Aksi</th>
                             </tr>
                             @php
                                 $i = 0;
                             @endphp
                             @foreach ($mahasiswas as $key => $mahasiswa)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>
                                         <form action="/update_mahasiswa/{{ $key }}" method="POST">
                                             @csrf
                                             <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                                             <input type="text" name="nama_mahasiswa"
                                                 value="{{ $mahasiswa['nama_mahasiswa'] }}">
                                     </td>
                                     <td> <label for="nim">NIM:</label>
                                         <input type="number" name="nim" value="{{ $mahasiswa['nim'] }}">
                                     </td>
                                     <td>
                                         <input type="submit" value="Update" class="btn btn-primary mt-3">
                                     </td>
                                     </form>
                                 </tr>
                             @endforeach


                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
