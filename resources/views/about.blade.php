<x-app-layout>
    <div class="relative" style="background-color: #cfebf8; height: 100vh;"> 
        <div class="flex h-full">
            <div class="mt-4 max-w-7xl mx-auto px-6 lg:px-8">
                <h1 class="text-center" style="font-size: 3em;">Tentang Kami</h1>
                <!-- Flex container to align text and image side by side -->
                <div class="mt-4" style="display: flex; align-items: flex-start; justify-content: flex-start;">
                    <img src="{{asset('img/pt.jpg')}}" alt="pt" style="border-radius: 20px; width: 500px; height: 320px; margin-right: 20px;">
                    <p class="mt-4" style="max-width: 600px; margin-left:60px; margin-right: 20px;">
                        Welcome to Mamah Laundry, a trusted laundry service center committed to providing high quality laundry solutions for your needs. We are dedicated to providing services that are not only efficient but also environmentally friendly, with a focus on customer satisfaction.
                        <br>
                        <br>
                        <br>
                        Our Vision and Mission
    
                        Our vision is to be the first choice in laundry services in Batam City by providing fast, quality and environmentally friendly services. Our mission is to ensure that every garment we handle receives special attention, using advanced technology and environmentally friendly methods to maintain the quality and cleanliness of your clothes.
                    </p>
    
                </div>
                <div class="mt-4" style="display: flex; align-items: flex-start; justify-content: flex-start;">
                    <p class="mt-6"> telah berkembang menjadi penyedia layanan laundry yang terpercaya dan efisien. Sejak awal berdiri, perusahaan ini berkomitmen untuk memberikan pelayanan berkualitas tinggi dengan menggunakan peralatan modern dan teknik pencucian terbaik. Fokus pada kepuasan pelanggan dan ketepatan waktu menjadikan perusahaan laundry Anda pilihan utama bagi masyarakat yang membutuhkan layanan laundry yang andal dan profesional.</p>
                    <img src="{{asset('img/pt.jpg')}}" alt="pt" style="border-radius: 20px; margin-left: 20px; width:500px; height: 320px">
                </div>
            </div>
        </div>
    </div>

    {{-- contact person  --}}
    <div style="background-color: #ffffff; padding: 30px;">
        <h1 class="text-center" style="font-size: 3em; color: rgb(0, 0, 0); margin-bottom: 20px;">Contact Person</h1>
        <div class="container text-center" style="color: #000000;">
            <p class="mb-4">Untuk informasi lebih lanjut mengenai layanan kami, Anda dapat menghubungi:</p>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <h5 style="color: #000000;">Email</h5>
                    <p>mamahlaundry@gmail.com</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 style="color: #000000;">Telepon</h5>
                    
                    <p>+62 812-3456-7890</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 style="color: #000000;">Alamat</h5>
                    <p>Jl. Melati No. 123, Batam</p>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>