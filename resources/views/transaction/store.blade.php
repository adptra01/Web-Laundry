  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transaction">
      Tambah Transaksi
  </button>
  <!-- Modal -->
  <div class="modal fade" id="transaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="{{ route('transactions.store') }}" method="post">
                  @csrf
                  <div class="modal-body">
                      @livewire('transaction')
                      <div class="mb-3">
                          <label for="payment" class="form-label">Pembayaran</label>
                          <select class="form-select" name="payment" id="payment">
                              <option selected disabled>Select one</option>
                              <option value="0">Belum Bayar</option>
                              <option value="1">Lunas</option>
                          </select>
                          @error('payment')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="costumer" class="form-label">Nama Pelanggan</label>
                          <input type="text" class="form-control" name="costumer" id="costumer"
                              aria-describedby="helpId" placeholder="Enter name costumer ">
                          @error('costumer')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="telp" class="form-label">No. Telepon</label>
                          <input type="number" class="form-control" name="telp" id="telp"
                              aria-describedby="helpId" placeholder="Enter telp costumer">
                          @error('telp')
                              <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="address" class="form-label">Alamat</label>
                          <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter address costumer"></textarea>
                          @error('address')
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
