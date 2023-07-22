<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE {{ $transaction->invoice }} - {{ $store->name_store ?? '' }}</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    /*
  Common invoice styles. These styles will work in a browser or using the HTML
  to PDF anvil endpoint.
*/

    body {
        font-size: 16px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table tr td {
        padding: 0;
    }

    .bold {
        font-weight: bold;
    }

    .right {
        text-align: right;
    }

    .large {
        font-size: 1.75em;
    }

    .total {
        font-weight: bold;
        color: #fb7578;
    }

    .logo-container {
        margin: 20px 0 70px 0;
    }

    .invoice-info-container {
        font-size: 0.875em;
    }

    .invoice-info-container td {
        padding: 4px 0;
    }

    .client-name {
        font-size: 1.5em;
        vertical-align: top;
    }

    .line-items-container {
        margin: 70px 0;
        font-size: 0.875em;
    }

    .line-items-container th {
        text-align: left;
        color: #999;
        border-bottom: 2px solid #ddd;
        padding: 10px 0 15px 0;
        font-size: 0.75em;
        text-transform: uppercase;
    }

    .line-items-container th:last-child {
        text-align: right;
    }

    .line-items-container td {
        padding: 15px 0;
    }

    .line-items-container tbody tr:first-child td {
        padding-top: 25px;
    }

    .line-items-container.has-bottom-border tbody tr:last-child td {
        padding-bottom: 25px;
        border-bottom: 2px solid #ddd;
    }

    .line-items-container.has-bottom-border {
        margin-bottom: 0;
    }

    .line-items-container th.heading-quantity {
        width: 50px;
    }

    .line-items-container th.heading-price {
        text-align: right;
        width: 100px;
    }

    .line-items-container th.heading-subtotal {
        width: 100px;
    }

    .payment-info {
        width: 38%;
        font-size: 0.75em;
        line-height: 1.5;
    }

    .footer {
        margin-top: 100px;
    }

    .footer-thanks {
        font-size: 1.125em;
    }

    .footer-thanks img {
        display: inline-block;
        position: relative;
        top: 1px;
        width: 16px;
        margin-right: 4px;
    }

    .footer-info {
        float: right;
        margin-top: 5px;
        font-size: 0.75em;
        color: #ccc;
    }

    .footer-info span {
        padding: 0 5px;
        color: black;
    }

    .footer-info span:last-child {
        padding-right: 0;
    }

    .page-container {
        display: none;
    }
</style>
<script type="text/javascript">
    window.onload = function() {
        window.print();
    };
</script>

<body>
    <div class="page-container">
        Page
        <span class="page"></span>
        of
        <span class="pages"></span>
    </div>

    <div class="logo-container">
        {{-- <img style="height: 18px" src="https://app.useanvil.com/img/email-logo-black.png"> --}}
    </div>

    <table class="invoice-info-container">
        <tr>
            <td rowspan="2" class="client-name">
                <h3 class="fw-bold text-primary">{{ $transaction->costumer }}</h3>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                Invoice Date: <strong>{{ Carbon\carbon::parse($transaction->created_at)->format('l, d M Y') }}</strong>
            </td>
            <td class="text-end">
                <strong>{{ $transaction->telp == null ? '-' : $transaction->telp }}</strong>
                </td>
        </tr>
        <tr>
            <td>
                Invoice No: <strong>{{ $transaction->invoice }}</strong>
            </td>
            <td class="text-end">
                <strong>{{ $transaction->address }}</strong>
            </td>
        </tr>
        <tr>
            <td>Payment Date : <strong>{{ $transaction->payment == 0 ? '-' : Carbon\carbon::parse($transaction->updated_at)->format('l, d M Y') }}</strong></td>
        </tr>
    </table>
    <div class="table-responsive mt-5">
        <table class="table table-hover
        align-middle">
            <thead>
                <tr class="text-center">
                    <th>Paket</th>
                    <th>Layanan</th>
                    <th>Berat X Harga</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="text-center">
                    <td>{{ $transaction->category->name }}</td>
                    <td>{{ $transaction->service->name }}</td>
                    <td>{{ $transaction->weight }} X {{ number_format($transaction->service->price, 0, ',', '.') . '/' .$transaction->service->unit }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <td class="fw-bold text-primary">Total : </td>
                    <td></td>
                    <td class="fw-bold text-primary">{{ number_format($transaction->totalTransaction, 0, ',', '.') }}</td>
                </tr>
                <tr class="text-center">
                    <td style="color:transparent;">Lorem.</td>
                    <td style="color:transparent;">Lorem.</td>
                    <td style="color:transparent;">Lorem.</td>
                </tr>
                <tr class="text-center">
                    <td class="fw-bold text-primary">Status : </td>
                    <td></td>
                    <td class="fw-bold text-{{ $transaction->status == 0 ? 'danger' : 'primary' }}">{{ $transaction->status == 0 ? 'Pengerjaan' : 'Selesai' }}</td>
                </tr>
                <tr class="text-center">
                    <td class="fw-bold text-primary">Pembayaran : </td>
                    <td></td>
                    <td class="fw-bold text-{{ $transaction->payment == 0 ? 'danger' : 'primary' }}">{{ $transaction->payment == 0 ? 'Belum Bayar' : 'Lunas' }}</td>
                </tr>
            </tfoot>
        </table>
    </div>


    <div class="footer">
        <div class="footer-thanks">
            <span>❤ Thank you!</span>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
