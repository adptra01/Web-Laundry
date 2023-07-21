  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#service">
      Tambah Layanan Laundry
  </button>
  <!-- Modal -->
  <div class="modal fade" id="service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="{{ route('services.store') }}" method="post">
                  @csrf
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="category_id" class="form-label">Jenis Paket</label>
                          <select class="form-select" name="category_id" id="category_id">
                              <option selected disabled>Select one</option>
                              @foreach ($categories as $item)
                                  <option value="{{ $item->id }}"
                                      {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                  </option>
                              @endforeach
                          </select>
                          @error('category_id')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="name" class="form-label">Nama Layanan</label>
                          <input type="text" class="form-control" name="name" id="name"
                              aria-describedby="helpId" value="{{ old('name') }}" placeholder="Enter new name">
                          @error('name')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="price" class="form-label">Harga </label>
                          <input type="number" class="form-control" name="price" id="price"
                              aria-describedby="helpId" value="{{ old('price') }}" placeholder="Enter price category">
                          @error('price')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="unit" class="form-label">Satuan</label>
                          <select class="form-select" name="unit" id="unit">
                              <option selected disabled>Select one</option>
                              <option value="Kg" {{ old('unit') == 'Kg' ? 'selected' : '' }}>Kg
                              </option>
                              <option value="Pcs" {{ old('unit') == 'Pcs' ? 'selected' : '' }}>Pcs
                              </option>
                          </select>
                          @error('unit')
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
