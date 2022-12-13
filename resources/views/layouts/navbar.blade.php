
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand" href="/"><strong>LittlePetshop</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('/')?'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('layouts.sbarang')?'active' : '' }}" href="/product-index">Semua Produk</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="navbar-nav ms-auto">
                @can('user')
                <?php
                    $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                    if (!empty($pesanan_utama)){
                        $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            }
                ?>
                    <a class="nav-link" href="{{ url('checkout') }}">
                        @if(!empty($notif))
                         <span class="badge rounded-pill bg-primary">{{ $notif++ }}</span>    
                        @endif
                            <i class="fa fa-shopping-cart"> Keranjang</i>
                    </a>
                @endcan
            </li>
            <li class="navbar-nav ms-auto">
                @can('admin')
                    <a class="nav-link" href="{{ url('/dashboard/index') }}">
                        <i class="fa fa-home">  </i>  Dashboard
                    </a>  
                @endcan
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('profile') }}">
                        <i class="fa fa-user">  </i>  Profile
                    </a>
                    @can('user')
                    <a class="dropdown-item" href="{{ url('history') }}">
                        <i class="fa fa-history">  </i>  Riwayat
                    </a> <hr>
                    @endcan
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-arrow-circle-right"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link {{ Request::is ('login')?'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link {{ Request::is ('register')?'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Register</a>
            </li>
            @endauth
        </ul>
    </div>
  </nav>
  