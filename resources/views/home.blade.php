



<style>
    .animated-letter {
        opacity: 0;
        animation: fadeInLetter 0.50s forwards;
    }

    .text-container h1 {
        /* display: flex; */
        border-right: 3px solid ;
        overflow: hidden;
        width: 14ch;
        font-family: monospace;
        white-space: nowrap;
        animation: textslide 10s steps(13, end), textKedip 1.50s ease infinite;
    }

    dotlottie-player {
        max-width: 100%;
        height: auto;
        margin-right: auto;
        margin-left: auto;
        display: block;
    }
   



    @keyframes textslide {
        from {
            width: 0;
        }
        to {
            width: 14ch;
        }
    }

    @keyframes textKedip {
        from {
            border-color: transparent;
        }
        50% {
            border-color: rgba(2, 2, 2, 0.63);
        }

        to {
            border-color: transparent;
        }
    }

    @keyframes fadeInLetter {
        to {
            opacity: 1;
        }

    }

      @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }
        p {
            font-size: 1.2rem;
        }
        /* img {
            width: 100%;
        } */

        /* Stack image below text on smaller screens */
        .relative {
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        dotlottie-player {
            width: 90vw;
            height: 90vw;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 1.8rem;
        }
        p {
            font-size: 1rem;
        }
        /* img {
            width: 100%;
        } */
        dotlottie-player {
            width: 100%; /* Untuk layar mobile yang sangat kecil */
            height: 100%;
        }
    }

    @media (max-width: 576px) {
    /* Untuk layar HP atau smartphone kecil */
    dotlottie-player {
        width: 90vw;  /* Lebar 90% dari viewport untuk layar kecil */
        height: 90vw; /* Proporsional sesuai lebar */
        margin-right: 0;
        margin-left: 0;
    }
}

</style>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

<x-app-layout>
    <div  style="background-color:rgb(255, 255, 255); ">
            {{-- page Utama --}}
            <div class="relative flex-wrap" style="height: 100vh; background-color: #cfebf8; display: flex; align-items: center; justify-content: space-between; padding: 50px;">
        
                <!-- Left Side: Text Content -->
                <div style="flex: 1; text-align: left;" class="text-container">
                    <h1 id="animatedTitle" style="display:flex; font-size: 3rem; font-weight: bold;  letter-spacing: 2px; margin-bottom: 20px;">
                        MAMAH LAUNDRY</h1>
                    <p id="animatedDescription" style="font-size: 1.5rem;">Quick, Efficient, and Eco-friendly Laundry Services</p>
                    
                    <!-- Unique Line Below Text -->
                    <div style="margin: 30px 0; width: 60%; height: 4px; background: linear-gradient(to right, #dbdedf, #3a313b); border-radius: 10px;"></div>
                </div>
            
                <!-- Right Side: Logo Image (with responsiveness) -->
                <div style=" display: absolute; justify-content: center;">
                    {{-- <img src="{{asset('img/img-logo-2.png')}}" alt="Hehe" id="animationimage"
                    style="width: 100%; max-width: 800px; height: auto; border-radius: 5px;"> --}}
                    <dotlottie-player src="https://lottie.host/8497f066-7d40-4252-b513-940fb1e37ea0/sq2fRkm9ZI.json" background="transparent" speed="1" style="width: auto; height: auto; margin-right: 100px;" direction="1" playMode="normal" loop autoplay>
                    </dotlottie-player>
                </div>
                
            </div>
            
            

    
            
            
            
            
            
    
            
            {{-- Keunggulan --}}
            <div style="background-color:rgb(240, 240, 240) ">
                <div class="mx-auto max-w-7xl px-6 py-8 relative" style="min-height: 40vh;">
                    <div class="text-center font-bold ">
                        <h1 style="font-size: 3rem; color: #000000;">Keunggulan Kami</h1>
                    </div>
                    
                    <!-- Content Cards with Bootstrap Grid -->
                    <div class="row justify-content-center mt-4">
                        <!-- High Quality -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="p-6 border rounded-lg text-center" style="background-color: #ffff; height: 100%; border-radius: 20px;">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{asset('img/achievement.png')}}" alt="achievement" width="60px" height="60px">
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800 mt-4">Kualitas Tinggi</h2>
                                <p class="mt-4 text-gray-600">Kami menggunakan mesin dan bahan berkualitas terbaik untuk memastikan pakaian Anda tetap bersih dan terjaga kualitasnya.</p>
                            </div>
                        </div>
                        
                        <!-- Affordable Price -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="p-6 border rounded-lg text-center" style="background-color: #ffff; height: 100%; border-radius: 20px;">
                                <div style="display: flex; justify-content:center; align-items: center;">
                                    <img src="{{asset('img/saving-money.png')}}" alt="save money" width="60px" height="60px">
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800 mt-4">Harga Terjangkau</h2>
                                <p class="mt-4 text-gray-600">Kami menawarkan layanan laundry dengan harga yang kompetitif tanpa mengorbankan kualitas.</p>
                            </div>
                        </div>
            
                        <!-- Fast Service -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="p-6 border rounded-lg text-center" style="background-color: #ffff; height: 100%; border-radius: 20px;">
                                <div style="display: flex; justify-content:center; align-items: center;">
                                    <img src="{{asset('img/fast-logo.png')}}" alt="Fast service" width="60px" height="60px">
                                </div>
                                <h2 class="text-2xl font-semibold text-gray-800 mt-4">Layanan Cepat</h2>
                                <p class="mt-4 text-gray-600">Proses cepat dengan waktu pengerjaan yang singkat untuk memenuhi kebutuhan laundry Anda setiap hari.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            
            <!-- Service Section -->
            <div style="background-color: #cfebf8; padding: 40px;">
                <div class="container">
                    <div class="text-center">
                        <h1 class="mb-5" style="font-size: 3em; color: #000000;">Service</h1>
                        <p class="mt-2 text-lg" style="color: #000000;">Kami menyediakan berbagai layanan laundry yang sesuai dengan kebutuhan Anda.</p>
                    </div>
                    
                    <!-- Bagian Konten Layanan -->
                    <div class="row justify-content-center mt-4">
                        <!-- Setrika -->
                        <div class="col-12 col-md-4 mb-3 mt-4">
                            <div class="">
                                <img src="{{asset('img/setrika.jpg')}}" alt="Setrika Image" class="card-img-top img-fluid" style="border-radius: 2rem;">
                                <div class="card-body">
                                    <h5 class="mt-4" style="color: #000000; font-size: 2rem">Setrika</h5>
                                    <p class="card-text mt-4" style="color: #000000">Pakaian Anda akan disetrika dengan rapi dan hati-hati, memastikan setiap lipatan sempurna dan bebas dari kerutan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Layanan Premium -->
                        <div class="col-12 col-md-4 mb-3 mt-4">
                            <div class="">
                                <img src="{{asset('img/ly.jpg')}}" alt="Layanan Premium Image" class="card-img-top img-fluid" style="border-radius: 2rem;">
                                <div class="card-body">
                                    <h5 class="mt-4" style="color: #000000; font-size: 2rem;">Layanan Premium</h5>
                                    <p class="card-text mt-4" style="color: #000000">Paket layanan lengkap dengan penanganan ekstra untuk pakaian khusus dan layanan pengiriman ke lokasi Anda.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cuci Gorden dan Karpet -->
                        <div class="col-12 col-md-4 mb-3 mt-4">
                            <div class="">
                                <img src="{{asset('img/sr.jpg')}}" alt="Cuci Gorden dan Karpet Image" class="card-img-top img-fluid" style="border-radius: 2rem;">
                                <div class="card-body">
                                    <h5 class="mt-4" style="color: #000000; font-size: 2rem">Cuci Gorden dan Karpet</h5>
                                    <p class="card-text mt-4" style="color: #000000">Membersihkan gorden dan karpet Anda dengan teknik khusus yang menjaga kebersihan dan kualitas bahan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
            {{-- Contact person --}}
        <div style="background-color:rgb(240, 240, 240); ">

            <div style=" padding: 30px;">
                <h1 class="text-center" style="font-size: 3em; color: rgb(0, 0, 0); margin-bottom: 20px;">Contact Person</h1>
                <div class="container text-center" style="color: #000000;">
                    <p >Untuk informasi lebih lanjut mengenai layanan kami, Anda dapat menghubungi:</p>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3 mt-4">
                            <h3 style="color: #000000;size: 2rem" >Email</h3>
                            <p class="mt-2">mamahlaundry@gmail.com</p>
                        </div>
                        <div class="col-md-4 mb-3 mt-4">
                            <h3 style="color: #000000;size: 2rem">Telepon</h3>
                            
                            <p class="mt-2">+62 812-3456-7890</p>
                        </div>
                        <div class="col-md-4 mb-3 mt-4">
                            <h3 style="color: #000000;size: 2rem;text-decoration-style: bold;" class="text-bold">Alamat</h3>
                            <p class="mt-2">Jl. Melati No. 123, Batam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</x-app-layout>


<script>
    // buat function untuk animasinya 
    function animateTextLetterByLetter(element, delayBeetweenText) {
        const text = element.innerText;
        element.innerHTML = "";
        
        text.split("").forEach((letter, index) => {
            const span = document.createElement("span");
            span.className = "animated-letter";
            span.textContent = letter;
                span.style.animationDelay = `${index * delayBeetweenText}s`;
                element.appendChild(span)
            });
        }
        
        // animasi buat h1 dan p
        const title = document.getElementById("animatedTitle");
        const description = document.getElementById("animatedDescription");
        
        // animateTextLetterByLetter(title, 0.1);
        animateTextLetterByLetter(description, 0.1);
        
        
        // buat gambar menjadi 3 d
        </script>

<script type="text/javascript">
    VanillaTilt.init(document.querySelector("animationImage"), {
        max: 25,
        speed: 400
    })
    
    VanillaTilt.init(document.querySelector("animationImage"))
    
</script>



<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>