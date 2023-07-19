<x-app>
    <x-slot name="title">Layanan Laundry</x-slot>
    @include('layouts.table')
    <div class="card">
        <div class="card-header">
            @include('service.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Layanan</th>
                            <th>Jenis Paket</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $no => $item)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->price . '/' . $item->unit }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a class="btn btn-secondary btn-sm" href="{{ route('services.show', $item->id) }}"
                                            role="button">Lihat</a>
                                        <form action="{{ route('services.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>
