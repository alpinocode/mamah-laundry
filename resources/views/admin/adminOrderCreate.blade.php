<x-side-bar-layout></x-side-bar-layout>


<main style="margin-top: 100px">
    <div class="container pt-4">
        <h2>Order Create</h2>

        <div class="relative flex-wrap justify-center items-center card-body text-center" style="display: flex;">
            <form action="{{ route('admin.createorders') }}" method="POST">
                @csrf
                <table class="table mt-4 table-striped" style="width: 1200px; height: auto;">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Nama Paket</td>
                            <td>Status</td>
                            <td>Harga</td>
                            <td>Tanggal Keluar</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service )
                        <tr>
                                
                            <td>
                                <select name="user_id" id="user_id" class="form-control text-center" style="border-radius: 10px; width: auto;">
                                        <option value="{{$service->user_id  }}">{{ $service->user->name}}</option>
                                </select>
                            </td>
                            <td>
                                <select name="service_id" id="service_id" class="form-control text-center" style="border-radius: 10px; width: auto;">
                                        <option value="{{ $service->id }}">{{ $service->nama_paket }}</option>
                                </select>
                            </td>
                            <td>
                                <select name="status" id="status" class="form-control text-center" style="border-radius: 10px;">
                                    <option value="pending">Pending</option>
                                    <option value="batal">Batal</option>
                                    <option value="success">Success</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" name="order_transaksi" id="order_transaksi" class="form-control text-center" style="border-radius: 10px;" placeholder="Input Harga">
                            </td>
                            <td>
                                <input type="date" name="tanggalKeluar" id="tanggalKeluar" class="form-control text-center" style="border-radius: 10px;">
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary" style="background-color: #000000; border-radius:10px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
