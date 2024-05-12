  @extends('dashboard.layouts.main')
  @section('container')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">Tambah Satuan</div>
                      <div class="card-body">
                          <form action="{{ route('satuan.store') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                  <label for="nama_satuan">Nama Satuan:</label>
                                  <input type="text" class="form-control" id="nama_satuan" name="nama_satuan">
                              </div>
                              <button type="submit" class="btn btn-primary mt-3">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
