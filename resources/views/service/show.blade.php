<x-app>
    <x-slot name="title">Layanan {{ $service->name }}</x-slot>
    <div class="card">
        <div class="card-header">
            @include('service.update')
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="category_id" class="form-label">Jenis Paket</label>
                <select class="form-select" name="category_id" id="category_id" disabled>
                    <option selected disabled>Select one</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{ $service->category->id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Layanan</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    value="{{ $service->name }}" disabled>
                @error('name')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga </label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId"
                    value="{{ $service->price }}" disabled>
                @error('price')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Satuan</label>
                <select class="form-select" name="unit" id="unit" disabled>
                    <option selected disabled>Select one</option>
                    <option value="Kg" {{ $service->unit == 'Kg' ? 'selected' : '' }}>Kg</option>
                    <option value="Pcs" {{ $service->unit == 'Pcs' ? 'selected' : '' }}>Pcs</option>
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
    </div>
</x-app>
