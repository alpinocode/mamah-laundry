<style>
    .order-form .container {
          color: #4c4c4c;
          padding: 20px;
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
          max-width: 650px;
        }
    
        .order-form-label {
          margin: 8px 0 0 0;
          font-size: 14px;
          font-weight: bold;
        }
    
    .order-form-input,
    .form-label,
    .form-check-label {
          font-family: 'Open Sans', sans-serif;
          font-size: 14px;
    
        }
    
        .btn-submit:hover {
          background-color: #0D47A1 !important;
        }
        
    
    </style>
    
    
    <x-app-layout>
    
        {{-- <form >
            <div class="form-group">
                <label for="service">Pilih Layanan</label>
                <select name="service_id" id="service" class="form-control">
                  
                        <option>Mantap</option>
                        <option>malas</option>
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> --}}
     
        <section class="order-form m-4" >
            <div class="container pt-4" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-12 px-4">
                        <h1>You can see my Order Form</h1>
                        <span>with some explanation below</span>
                        <hr class="mt-1" />
                    </div>
                    <form action="{{route('orders')}}" method="POST">
                        @csrf
                        <div class="col-12">
              
                            <div class="row mt-3 mx-4">
                                <div class="col-12">
                                    <div class="col-12">
                                        <label class="order-form-label" for="date-picker-example">Pilih Paket Anda</label>
                                    </div>
                                        <select name="nama_paket" id="nama_paket" class="from-controle text-center" style="border-radius: 10px; width: 300px;">
                                            <option name="nama_paket" id="nama_paket" >Standar</option>
                                            <option name="nama_paket" id="nama_paket">Express</option>
                                        </select>
                                </div>
                            </div>
              
                            <div class="row mt-3 mx-4">
                                <div class="col-12">
                                    <div class="col-12">
                                        <label class="order-form-label" for="date-picker-example">Pilih Service Anda</label>
                                    </div>
                                        <select name="service_name" id="service_name" class="from-controle text-center" style="border-radius: 10px; width: 300px;">
                                            <option name="service_name" id="service_name">Setrika</option>
                                            <option name="service_name" id="service_name">Setrika&Cuci</option>
                                            <option name="service_name" id="service_name">Karpet Kecil</option>
                                            <option name="service_name" id="service_name">Karpet Sedang</option>
                                            <option name="service_name" id="service_name">Karpet Besar</option>
                                        </select>
                                </div>
                            </div>
              
                            <div class="row mt-3 mx-4">
                                <div class="col-12">
                                    <label class="order-form-label" for="date-picker-example">Description</label>
                                </div>
                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline datepicker" data-mdb-toggle-button="false">
                                        <input
                                        type="text" class="form-control order-form-input" id="description" name="description" data-mdb-toggle="description" style="border-radius: 10px;"/>
                                        <label for="datepicker1" class="form-label">Select a Description</label>
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="row mt-3 mx-4">
                                <div class="col-12">
                                    <label class="order-form-label" for="tanggal_reservasi">Tanggal Reservasi</label>
                                </div>
                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline datepicker" data-mdb-toggle-button="false">
                                        <input
                                        type="date" class="form-control order-form-input" id="tanggal_reservasi" name="tanggal_reservasi" data-mdb-toggle="datepicker" style="border-radius: 10px; width: 200px"/>
                                        <label for="datepicker1" class="form-label">Select a Tanggal Reservasi</label>
                                    </div>
                                </div>
                            </div>
    
                            <x-primary-button class="mt-4" style="margin-left: 30px; border-radius: 10px;">{{__('Submit')}}</x-primary-button>
    
                    </form>
          
                    </div>
                </div>
            </div>
          </section>
    
    
    
    </x-app-layout>
    