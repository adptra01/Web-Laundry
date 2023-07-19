<x-app>
    <div class="card m-5">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#category">
                Launch demo modal
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr class="">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->estimate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                        <div class="alert alert-primary" role="alert">
                            <strong>Alert Heading</strong> Some Word
                        </div>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                aria-describedby="helpId" placeholder="Enter new name">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="estimate" class="form-label">estimate</label>
                            <input type="text" class="form-control" name="estimate" id="estimate"
                                aria-describedby="helpId" placeholder="Enter estimate category">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card m-5">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#service">
                Launch demo modal
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $services = App\Models\Service::get();
                        @endphp
                        @foreach ($services as $item)
                            <tr class="">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                        <div class="alert alert-primary" role="alert">
                            <strong>Alert Heading</strong> Some Word
                        </div>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('services.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">category_id</label>
                            <select class="form-select" name="category_id" id="category_id">
                                <option selected disabled>Select one</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                aria-describedby="helpId" placeholder="Enter new name">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input type="number" class="form-control" name="price" id="price"
                                aria-describedby="helpId" placeholder="Enter price category">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Satuan</label>
                            <select class="form-select" name="unit" id="unit">
                                <option selected disabled>Select one</option>
                                <option value="Kg">Kg</option>
                                <option value="Pcs">Pcs</option>
                            </select>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card m-5">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transaction">
                Launch demo modal
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                            <th scope="col">Column 1</th>
                            <th scope="col">Column 2</th>
                            <th scope="col">Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $transactions = App\Models\transaction::get();
                        @endphp
                        @foreach ($transactions as $item)
                            <tr class="">
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->service->name }}</td>
                                <td>{{ $item->costumer }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->status == 0 ? 'false' : 'true' }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="transaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                        <div class="alert alert-primary" role="alert">
                            <strong>Alert Heading</strong> Some Word
                        </div>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('transactions.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">category_id</label>
                            <select class="form-select" name="category_id" id="category_id">
                                <option selected disabled>Select one</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="service_id" class="form-label">service_id</label>
                            <select class="form-select" name="service_id" id="service_id">
                                <option selected disabled>Select one</option>
                                @foreach ($services as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="costumer" class="form-label">costumer</label>
                            <input type="text" class="form-control" name="costumer" id="costumer"
                                aria-describedby="helpId" placeholder="costumer">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">telp</label>
                            <input type="number" class="form-control" name="telp" id="telp"
                                aria-describedby="helpId" placeholder="telp">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                aria-describedby="helpId" placeholder="address">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">weight</label>
                            <input type="number" class="form-control" name="weight" id="weight"
                                aria-describedby="helpId" placeholder="weight">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app>
