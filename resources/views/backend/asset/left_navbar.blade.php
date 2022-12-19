  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('asset/uplode/user/'.auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.dashbord') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashbord') }}">
                  <img class="mr-2" src="{{ request()->is('admin') ? 'https://img.icons8.com/material/24/1a78dd/dashboard-layout.png' : 'https://img.icons8.com/material-outlined/24/737373/dashboard-layout.png' }}" width="22">
                  <p class="{{ request()->is('admin') ? 'text-primary' : '' }}">Dashbord</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.category.index') }}">
                <img class=" mr-2" src="{{ request()->is('admin/category*') ? 'https://img.icons8.com/external-sbts2018-solid-sbts2018/58/1a78dd/external-category-basic-ui-elements-2.2-sbts2018-solid-sbts2018.png' : 'https://img.icons8.com/external-sbts2018-outline-sbts2018/58/737373/external-category-basic-ui-elements-2.2-sbts2018-outline-sbts2018.png' }}" width="22px">
                <p class="{{ request()->is('admin/category*') ? 'text-primary' : '' }}">Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.tag.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/tag*') ? 'https://img.icons8.com/material-rounded/24/1a78dd/sale-price-tag.png' : 'https://img.icons8.com/material-outlined/24/737373/sale-price-tag.png' }}" width="22px">
                <p class="{{ request()->is('admin/tag*') ? 'text-primary' : '' }}">Tag</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.post.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/post*') ? 'https://img.icons8.com/material-rounded/24/1a78dd/mailbox-opened-flag-down.png' : 'https://img.icons8.com/material-outlined/24/737373/mailbox-opened-flag-down.png' }}" width="22px">
                <p class="{{ request()->is('admin/post*') ? 'text-primary' : '' }}">Post</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.message.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/message*') ? 'https://img.icons8.com/fluency-systems-regular/48/1a78dd/topic.png' : 'https://img.icons8.com/fluency-systems-regular/48/737373/topic.png' }}" width="22px">
                <p class="{{ request()->is('admin/message*') ? 'text-primary' : '' }}">Message</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.user.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/user*') ? 'https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/1a78dd/external-users-user-tanah-basah-glyph-tanah-basah-2.png' : 'https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/737373/external-users-user-tanah-basah-basic-outline-tanah-basah.png' }}" width="22px"/>
                <p class="{{ request()->is('admin/user*') ? 'text-primary' : '' }}">User</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.setting.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/setting*') ? 'https://img.icons8.com/external-anggara-glyph-anggara-putra/32/1a78dd/external-setting-basic-user-interface-anggara-glyph-anggara-putra.png' : 'https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/737373/external-setting-basic-ui-elements-flatart-icons-outline-flatarticons.png' }}" width="22px"/>
                <p class="{{ request()->is('admin/setting*') ? 'text-primary' : '' }}">Setting</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.profile.index') }}">
                <img class="mr-2" src="{{ request()->is('admin/profile*') ? 'https://img.icons8.com/ios-filled/50/1a78dd/contacts.png' : 'https://img.icons8.com/ios/50/737373/contacts.png' }}" width="22px"/>
                <p class="{{ request()->is('admin/profile*') ? 'text-primary' : '' }}">Your Profile</p>
              </a>
            </li>
            <li class="nav-item mb-lg-5">
              <a href="{{ route('logout') }}" class="nav-link">
                <img class="ml-1 mr-1" src="https://img.icons8.com/ios/50/737373/exit.png" width="16px"/>
                <p class="ms-2">Log Out</p>
              </a>
            </li>
            <li class="nav-item btn btn-primary p-0">
              <a href="{{ route('home') }}" target="_blank" class="nav-link">
                <img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/visible--v1.png" style="width: 18"/>
                <p class="ms-2">View Website</p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>