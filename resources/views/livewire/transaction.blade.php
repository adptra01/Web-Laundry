<div>
    @if ($categories)
        <div class="mb-3">
            <label for="category_id" class="form-label">Pilih Paket</label>
            <select wire:model="selectedCategoryId" class="form-select" name="category_id" id="category_id" required>
                <option value="" selected>Select one</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
    @endif

    @if ($services)
        <div class="mb-3">
            <label for="service_id" class="form-label">Pilih Layanan</label>
            <select wire:model="selectedServiceId" class="form-select" name="service_id" id="service_id" required>
                <option value="" selected>Select one</option>
                @foreach ($services as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('service_id')
                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
    @endif

    <!-- Other form fields ... -->

    @if ($selectedServiceId && $servicePrice)
        <div class="row">
            <div class="col-md">
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                        placeholder="Service Price" value="{{ $servicePrice }}" readonly>
                    @error('price')
                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label for="weight" class="form-label">Berat</label>
                    <input wire:model="weight" type="number" class="form-control" name="weight" id="weight"
                        aria-describedby="helpId" placeholder="Weight" step="0.01" required>
                    @error('weight')
                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
    @endif

    @if ($selectedServiceId && $servicePrice)
        <div class="mb-3">
            <label for="totalTransaction" class="form-label">Total Harga</label>
            <input type="text" class="form-control" name="totalTransaction" id="totalTransaction"
                aria-describedby="helpId" placeholder="Total Transaction" value="{{ $totalTransaction }}" readonly>
            @error('totalTransaction')
                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
    @endif

</div>
