<div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Halaman Phonebook</div>
          <div class="card-body">
            <!-- Flash Message -->
            <!-- Success -->
            @if(session()->has('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
            @endif
            <!-- Gagal -->
            @if(session()->has('error'))
            <div class="alert alert-danger">
              {{session('error')}}
            </div>
            @endif

            <!-- FORM INPUT KONTAK -->
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-5">
                    <input type="text" class="form-control form-control-sm" placeholder="Name">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control form-control-sm" placeholder="Phone">
                  </div>
                  <div class="col-2">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>

            <hr>

            <!-- TABEL KONTAK -->
            <input type="text" class="form-control form-control-sm float-right mb-1" style="width: initial;" placeholder="Cari...">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">nomor</th>
                  <td>nama</td>
                  <td>nomor hp</td>
                  <td>
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
