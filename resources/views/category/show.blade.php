<x-app>
    <x-slot name="title">Paket {{ $category->name }}</x-slot>
    <div class="card">
        <div class="card-header">
            @include('category.update')
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Jenis</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    value="{{ $category->name }}" disabled>
                @error('name')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="estimate" class="form-label">Perkiraan waktu (Estimasi)</label>
                <input type="text" class="form-control" name="estimate" id="estimate" aria-describedby="helpId"
                    value="{{ $category->estimate }}" disabled>
                @error('estimate')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</x-app>
