<x-app>
    <x-slot name="title">Dashboard</x-slot>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h6><strong>Jumlah Kategori Paket</strong></h6>
                        <div class="d-flex justify-content-between">
                            <h1><i class="ti ti-category"></i></h1>
                            <h3><Strong>{{ $categories }}</Strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h6><strong>Jumlah Kategori Layanan</strong></h6>
                        <div class="d-flex justify-content-between">
                            <h1><i class="ti ti-category-2"></i></h1>
                            <h3><Strong>{{ $services }}</Strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h6><strong>Jumlah Kategori Paket</strong></h6>
                        <div class="d-flex justify-content-between">
                            <h1><i class="ti ti-ad-2"></i></h1>
                            <h3><Strong>{{ $transactions }}</Strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
