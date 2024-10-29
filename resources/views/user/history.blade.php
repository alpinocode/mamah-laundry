<x-app-layout>
   
    
    <x-slot name="header" class="text-center justify-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left: 170px">
            History 
        </h2>
    </x-slot>
    @if ($orders->isEmpty())
    <div>
        TIdak ada Tranksaksi
    </div>
    @else
    
    <div class="relative flex-wrap justify-center items-center card-body text-center" style="display: flex;">
        <table class="table mt-4 table-striped" style="width: 900px; height: auto;">
            <thead>
                <tr>
                    <th>Nama Paket</th>
                    <th>Service</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Estimasi Selesai</th>
                </tr>
            </thead>
            <tbody>
             
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->service->nama_paket}}</td>
                        <td>{{$order->service->service_name}}</td>
                        <td>{{$order->order_transaksi}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->tanggalKeluar}}</td>
                    </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
        
    @endif
    
    

    {{-- <a href="{{ route('user.history', ['id' => $order->service_id]) }}">Lihat Riwayat</a> --}}
</x-app-layout>