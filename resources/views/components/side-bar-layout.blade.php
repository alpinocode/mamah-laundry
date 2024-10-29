<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<style>
    body{
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0 ;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }


    @media(max-width: 991.98px) {
        .sidebar {
           width:  100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 /12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }
</style>

<header>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                href=""
                class="list-group-item list-group-item-action py-2 ripple"
                aria-current="true"
              >
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
              </a>
              {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Website Traffic</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Komentar</span>
              </a> --}}
              <a href="{{route('admin.order')}}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Order History</span>
              </a>
              <a href="{{route('admin.createorders')}}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Order Create</span>
              </a>
              <a href="{{route('admin.schedule')}}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Schedule Pertemuan</span>
              </a>
            </div>
        </div>
    </nav>

    {{-- navbar --}}
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        {{-- Container Wrappper --}}
        <div class="container-fluid">
            <button 
                data-mdb-button-init
                class="navbar-toggler"
                type="button"
                data-mbd-collapse-init
                data-mbd-targe="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            {{-- brand --}}
            <a href="#" class="navbar-brand">
                <img src="{{asset('img/logo.png')}}" alt="MamahLaundry" height="45" loading="lazy" style="border-radius: 45px;">
            </a>

        

            
        </div>
    </nav>
</header>

{{-- Main Navigation --}}

{{-- Main Layout --}}
<main style="margin-top: 58px;">
    <div class="container pt-4">
        
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>