



<x-side-bar-layout>

</x-side-bar-layout>
{{-- Content Page --}}
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <h2>
            History Schedule
        </h2>
    
    
        <div class="relative flex-wrap justify-center items-center card-body text-center" style="display: flex; ">
            <table class="table mt-4 table-striped" style="width: 1200px; height: auto;">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Nama Paket</td>
                        <td>Service Name</td>
                        <td>description</td>
                        <td>Tanggal Reservasi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service )
                    <tr>
                        <td>{{$service->user->name}}</td>
                        <td>{{$service->nama_paket}}</td>
                        <td>{{$service->service_name}}</td>
                        <td>{{$service->description}}</td>
                        <td>{{$service->tanggal_reservasi}}</td>
                    </tr>
                    @endforeach   
                </tbody>
            </table>
        </div>
    </div>
</main>
