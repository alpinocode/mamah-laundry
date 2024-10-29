<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

/* #phoneImage {
            transition: transform 0.5s ease-in-out;
            cursor: pointer;
        }

        #phoneImage:hover {
            transform: scale(1.1);
        }

        #phoneImage:active {
            transform: scale(1.2) rotate(30deg);
        }
@keyframes imgSlide {
  from {
    20%
  }
  to{
    80%
  } */

/* } */

</style>

<section  style="background-color: #cfebf8; ">
    <div class="container py-5 h-100" style="height: auto;">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <dotlottie-player src="https://lottie.host/bb3508ab-4d08-4dd5-beae-a501e1035e1d/i0pmI9hziW.json" background="transparent" speed="1" style="width: auto; height: auto;" direction="1" playMode="normal" loop autoplay>
          </dotlottie-player>

        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <x-input-label for="email" :value="__('Email')" style="color: rgb(0, 0, 0); font-size: 1.5rem; "/>
                <x-text-input class="form-control form-control-lg" id="email" 
                                type="email"
                                name="email" 
                                :value="old('email')" required autofocus autocomplete="username"/>
             
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
  
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <x-input-label for="password" :value="__('Password')" style="color: rgb(0, 0, 0); font-size: 1.5rem; " > </x-input-label>
                <x-text-input class="form-control form-control-lg" id="password" type="password" name="password" required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
          
              <div class="block justify-content-start " style="margin-right:210px; ">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class=" text-sm text-gray-600 ml-10" style="color: rgb(0, 0, 0); font-size: 1rem;">{{ __('Remember me') }}</span>
                </label>
            </div>
    
              @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>
  
            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Sign in</button>
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="margin-left: 10px;"> <a href="{{route('register')}}" style="text-decoration:none; color: #ffff;"> Register</a></button>
          </form>
        </div>
      </div>
    </div>
  </section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



{{-- Animation page lottie script --}}
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>