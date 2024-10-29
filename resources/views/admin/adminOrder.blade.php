<x-side-bar-layout>
</x-side-bar-layout>

<main style="margin-top: 58px;">
    <div class="container pt-4">
        <h2>History Order</h2>

        <div class="relative flex-wrap justify-center items-center card-body text-center" style="display: flex;">
            <table class="table mt-4 table-striped" style="width: 1200px; height: auto;">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Nama Paket</td>
                        <td>Service Name</td>
                        <td>Tanggal Masuk</td>
                        <td>Status</td>
                        <td>Harga</td>
                        <td>Tanggal Keluar</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->user ? $order->user->name : "_" }}</td> 
                            <td>{{ $order->service ? $order->service->nama_paket : "_" }}</td>
                            <td>{{ $order->service ? $order->service->service_name : "_" }}</td>
                            <td>{{ $order->tanggalMasuk }}</td> 
                            <td>
                                <form action="{{ route('order.update', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" id="status" class="form-control text-center" style="border-radius: 10px;" onchange="this.form.submit()">
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="batal" {{ $order->status == 'batal' ? 'selected' : '' }}>Batal</option>
                                        <option value="success" {{ $order->status == 'success' ? 'selected' : '' }}>Success</option>
                                    </select>
                                </form>
                            </td>
                            <td>{{ $order->order_transaksi }}</td>
                            <td>{{ $order->tanggalKeluar }}</td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>

        <!-- Tampilkan pesan sukses atau error jika ada -->
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>
</main>
