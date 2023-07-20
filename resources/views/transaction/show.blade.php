<x-app>
    <x-slot name="title">Transaksi Laundry</x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="text-center"><strong>Layanan Laundry</strong></h5>
            <hr>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Pilih Paket</label>
                        <select class="form-select" name="category_id" id="category_id" disabled>
                            <option value="">Select one</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}"
                                    {{ $transaction->category->id == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="service_id" class="form-label">Pilih Layanan</label>
                        <select class="form-select" name="service_id" id="service_id" disabled>
                            <option value="">Select one</option>
                            @foreach ($services as $item)
                                <option value="{{ $item->id }}"
                                    {{ $transaction->service->id == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="price" id="price"
                            aria-describedby="helpId" placeholder="Service Price"
                            value="{{ $transaction->service->price }}" disabled>
                        @error('price')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="weight" class="form-label">Berat</label>
                        <input type="number" class="form-control" name="weight" id="weight"
                            aria-describedby="helpId" placeholder="Weight" step="0.01"
                            value="{{ $transaction->weight }}" disabled>
                        @error('weight')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="totalTransaction" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" name="totalTransaction" id="totalTransaction"
                            aria-describedby="helpId" placeholder="Total Transaction"
                            value="{{ $transaction->totalTransaction }}" disabled>
                        @error('totalTransaction')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="payment" class="form-label">Pembayaran
                            @if ($transaction->payment == 0)
                                <span class="text-warning"><i class="ti ti-alert-circle"></i> </span>
                            @else
                                <span class="text-success"> ✔</span>
                            @endif
                        </label>
                        <select class="form-select" name="payment" id="payment" disabled>
                            <option value=" ">Select one</option>
                            <option value="0" {{ $transaction->payment == 0 ? 'selected' : '' }}>Belum Bayar
                            </option>
                            <option value="1" {{ $transaction->payment == 1 ? 'selected' : '' }}>Lunas
                            </option>
                        </select>
                        @error('payment')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <h5 class="text-center mt-3"><strong>Pelanggan</strong></h5>
            <hr>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="costumer" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="costumer" id="costumer"
                            aria-describedby="helpId" value="{{ $transaction->costumer }}" disabled>
                        @error('costumer')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="telp" class="form-label">No. Telepon</label>
                        <input type="number" class="form-control" name="telp" id="telp"
                            aria-describedby="helpId" value="{{ $transaction->telp }}"disabled>
                        @error('telp')
                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" name="address" id="address" rows="3" disabled>{{ $transaction->address }}</textarea>
                @error('address')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <h5 class="text-center mt-3"><strong>Detail</strong></h5>
            <hr>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="created_at" class="form-label">Tanggal Transaksi</label>
                        <input type="text" class="form-control" name="created_at" id="created_at"
                            aria-describedby="helpId" placeholder="created_at"
                            value="{{ Carbon\carbon::parse($transaction->created_at)->format('l, d m Y') }}" disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="created_at" class="form-label">Tanggal Bayar</label>
                        <input type="text" class="form-control" name="created_at" id="created_at"
                            aria-describedby="helpId" placeholder="created_at"
                            value="{{ $transaction->payment == 0 ? '-' : Carbon\carbon::parse($transaction->updated_at)->format('l, d m Y') }}"
                            disabled>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status
                            @if ($transaction->status == 0)
                                <span class="text-warning"><i class="ti ti-alert-circle"></i> </span>
                            @else
                                <span class="text-success"> ✔</span>
                            @endif
                        </label>
                        <input type="text" class="form-control" name="status" id="status"
                            aria-describedby="helpId" placeholder="status"
                            value="{{ $transaction->status == 0 ? 'Pengerjaan' : 'Selesai' }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
