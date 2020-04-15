<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a href="{{route('Welcome')}}" class="navbar-brand">Hydro</a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-nav-first">
                   <li><a href="#home" class="smoothScroll">Home</a></li>
                   <li><a href="#about" class="smoothScroll">About</a></li>
                   <li><a href="#blog" class="smoothScroll">Blog</a></li>
                   <li><a href="#work" class="smoothScroll">Our Work</a></li>
                   <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                   @can('admin', App\User::class)

                   <li><a href="{{route('Admin')}}" class="smoothScroll">Admin</a></li>
                   {{-- <li><a href="#" class="smoothScroll">Edit Mode</a></li> --}}

                   @endcan
                   
              </ul>

              <ul class="nav navbar-nav navbar-right">
                   <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   

                   @if (Auth::check())
                       <li class="section-btn">
                         <a class="" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                       </li>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                   @else
                   
                   <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                   @endif
              </ul>
         </div>

    </div>
</section>