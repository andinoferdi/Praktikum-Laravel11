 @extends('dashboard.layouts.main')
 @section('container')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Daftar kecamatan</div>

                     <div class="card-body">
                         <br /><br />
                         <table class="table table-bordered">
                             <tr>
                                 <th>No</th>
                                 <th>Nama kecamatan</th>
                             </tr>
                             @php
                                 $i = 0;
                             @endphp
                             @foreach ($kecamatans as $kecamatan)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $kecamatan->nama_kecamatan }}</td>
                                 </tr>
                             @endforeach
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
