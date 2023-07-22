<x-app>
    <x-slot name="title">Laporan Transaksi</x-slot>
    @include('layouts.report')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Paket</th>
                            <th>Layanan</th>
                            <th>Harga X Berat</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Pembayaran</th>
                            <th>Tanggal Transaksi</th>
                            <th>Tanggal Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $no => $item)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $item->costumer }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->service->name }}
                                <td>{{ number_format($item->service->price, 0, ',', '.') . '/' . $item->service->unit . ' x ' . $item->weight }}
                                </td>
                                <td>{{ number_format($item->totalTransaction, 2, ',', '.') }}</td>
                                <td><span
                                        class="badge bg-{{ $item->status == 0 ? 'warning' : 'success' }}">{{ $item->status == 0 ? 'Pengerjaan' : 'Selesai' }}</span>
                                </td>
                                <td><span
                                        class="badge bg-{{ $item->payment == 0 ? 'danger' : 'success' }}">{{ $item->payment == 0 ? 'Belum Bayar' : 'Lunas' }}</span>
                                </td>
                                <td>{{ Carbon\carbon::parse($item->updated_at)->format('Y-m-d') }}</td>
                                <td>{{ $item->payment == 0 ? '' : Carbon\carbon::parse($item->updated_at)->format('Y-m-d') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>
