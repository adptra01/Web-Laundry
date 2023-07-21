  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#category">
      Tambah Jenis Paket
  </button>
  <!-- Modal -->
  <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="modal-title" id="exampleModalLabel">
                      <div class="alert alert-primary" role="alert">
                          <strong>🔔 Peringatan</strong>
                          <p>Pastikan semua kolom diisi dengan benar sebelum menyimpan data.
                          </p>
                      </div>

                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('categories.store') }}" method="post">
                  @csrf
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="name" class="form-label">Nama Jenis</label>
                          <input type="text" class="form-control" name="name" id="name"
                              value="{{ old('name') }}" aria-describedby="helpId" placeholder="Enter new name">
                          @error('name')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="estimate" class="form-label">Perkiraan waktu (Estimasi)</label>
                          <input type="text" class="form-control" name="estimate" id="estimate"
                              aria-describedby="helpId" value="{{ old('estimate') }}" placeholder="Enter estimate category">
                          @error('estimate')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3 text-end">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
