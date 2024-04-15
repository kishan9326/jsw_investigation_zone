  @php
  $current_route=request()->route()->getName();
  @endphp
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin-assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{$current_route=='dashboard'?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- --------------- -->

          <li class="nav-item">
            <a href="{{route('view_game_data')}}" class="nav-link {{$current_route=='view_game_data'?'active':''}}">
              <i class="far fas fa-user"></i>
              <p>
                Game Details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('view_games_info')}}" class="nav-link {{$current_route=='view_games_info'?'active':''}}">
              <i class="far fas fa-user"></i>
              <p>
                Game Data
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Game Questions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('view_rescue_quetions') }}" class="nav-link {{ $current_route == 'view_rescue_quetions' ? 'active' : '' }}">
                  <i class="far fas fa-user"></i>
                  <p>Rescue Champs Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('view_rescue_hindi_quetions') }}" class="nav-link {{ $current_route == 'view_rescue_hindi_quetions' ? 'active' : '' }}">
                  <i class="far fas fa-user"></i>
                  <p>Rescue Champs Hindi Questions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('view_cosmic_quetions') }}" class="nav-link {{ $current_route == 'view_cosmic_quetions' ? 'active' : '' }}">
                  <i class="far fas fa-user"></i>
                  <p>Coral Empire Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('view_reconnect_quetions') }}" class="nav-link {{ $current_route == 'view_reconnect_quetions' ? 'active' : '' }}">
                  <i class="far fas fa-user"></i>
                  <p>Reconnect World Questions</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a href="{{route('view_game_slots')}}" class="nav-link {{$current_route=='view_game_slots'?'active':''}}">
              <i class="far fas fa-user"></i>
              <p>
                Game Slots
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('editRescueHindi')}}" class="nav-link {{$current_route=='editRescueHindi'?'active':''}}">
              <i class="far fas fa-user"></i>
              <p>
               Rescue Champ Hindi
              </p>
            </a>
          </li>




        </ul>
      </nav>







      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>