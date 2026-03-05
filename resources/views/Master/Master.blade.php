
@include('Master.Header')

@php


$data = DB::table('brands')->get();

foreach ($data as $brand) {
    $foto = $brand->images;
    echo $foto;
}


 $hour = date('H'); // 0 - 23
    if ($hour >= 5 && $hour < 12) {
        $greeting = 'Good Morning';
        $icon = '🌞';
    } elseif ($hour >= 12 && $hour < 17) {
        $greeting = 'Good Afternoon';
        $icon = '☀️';
    } else {
        $greeting = 'Good Night';
        $icon = '🌙';
    }
use Carbon\Carbon;

// Waktu sekarang
$now = Carbon::now(); // Sesuai timezone di config/app.php

// Format jam:menit AM/PM
$time = $now->format('h:i A'); // Contoh: 02:35 PM

// Format tanggal lengkap
$date = $now->format('l, d F Y'); // Contoh: Thursday, 05 March 2026



@endphp


  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between mb-4">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
       
          <img src="{{ asset('brand/'.$foto) }}" alt="" width="150">
      
      </div>

      <div class="d-lg-flex align-items-center gap-2">
       <span style="font-size: 2rem; margin-right:10px;">{{ $icon }}</span>
        <h6 style="color: white;" class="mb-0">{{ $greeting }}, {{ Auth::user()->name }} | {{ $date }} : {{ $time }}</h6>
        <div class="d-flex align-items-center justify-content-center gap-2">
          


         
        </div>
      </div>

    </div>
    <!-- Sidebar Start -->
    <aside class="left-sidebar mt-4">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
         
            <img src="{{ asset('brand/'.$foto) }}" style="border-radius: 100%;margin-left:50px;border:1px solid black;" width="60" height="60" alt="" />
          
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard.index') }}" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('suppliers.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Suppliers</span>
                </div>
                
              </a>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('product.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="bi bi-cup-hot"></i>
                  </span>
                  <span class="hide-menu">Products POS</span>
                </div>
                
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('categories.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                   <i class="bi bi-fork-knife text-success"></i>
                  </span>
                  <span class="hide-menu">Categories</span>
                </div>
                
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">Stocks</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('stock.index')}}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Stocks</span>
                    </div>
                    
                  </a>
                </li>
                {{-- <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">About Us</span>
                    </div>
                    
                  </a>
                </li> --}}
                {{-- <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Blog</span>
                    </div>
                    
                  </a>
                </li> --}}
               
              </ul>
            </li>

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
               <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="bi bi-cash-coin"></i>
                  </span>
                  <span class="hide-menu">Transactions</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('transactions.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Daily Transation</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('transactions.report') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Detail Transactions</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Summary Report</span>
                    </div>
                    
                  </a>
                </li>
               
              
              </ul>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Setting</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                   <i class="bi bi-gear"></i>
                  </span>
                  <span class="hide-menu">Setting</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('brand.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Brand</span>
                    </div>
                    
                  </a>
                </li>
               
               
              </ul>
            </li>
          
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('users.index') }}"
                aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                  
                  </span>
                  <span class="hide-menu">User Profile</span>
                </div>
                
              </a>
            </li>
           
           
          
           

          
           
            
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper mt-2">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown pt-4">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 1
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 2
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
               
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">



                  @if (!Auth::user()->foto==null)
                    <img src="{{ asset('profile/'.Auth::user()->foto) }}" alt="" width="35" height="35" class="rounded-circle" style="border:  1px solid black;">

                    
                  @else
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                    
                  @endif
                  
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                  <a href="{{ route('profile.index') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    
                   
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                    <button type="submit"  class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  @include('Master.Footer')
 