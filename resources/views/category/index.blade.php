<x-app>
    <x-slot name="title">Jenis Paket</x-slot>
    @include('layouts.table')
    <div class="card">
        <div class="card-header">
            @include('category.store')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jenis</th>
                            <th>Estimasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $no => $item)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->estimate }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('categories.show', $item->id) }}" role="button">Lihat</a>
                                        <form action="{{ route('categories.destroy', $item->id) }}" method="post">
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
