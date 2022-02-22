<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{ url('/') }}" class="simple-text logo-normal">
        <img src="{{ asset('img/logo/logo.png') }}" style="width: 100%; height: 10vh; object-fit: contain;" alt="">
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        @if (Auth::user()->role_as == 1 || Auth::user()->role_as == 3)
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
          <a class="nav-link " href="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        @endif
        <li class="nav-item {{ Request::is('categories') ? 'active':'' }}">
          <a class="nav-link " href="{{ url('categories') }}">
            <i class="material-icons">category</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('subcategory') ? 'active':'' }}">
          <a class="nav-link" href="{{ ('subcategory') }}">
            <i class="material-icons">category</i>
            <p>Sous-categorie</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('brands') ? 'active':'' }}">
          <a class="nav-link" href="{{ 'brands' }}">
            <i class="material-icons">branding_watermark</i>
            <p>Marques</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active':'' }}">
          <a class="nav-link" href="{{ 'products' }}">
            <i class="material-icons">article</i>
            <p>Produits</p>
          </a>
        </li>
        @if (Auth::user()->role_as == 1 || Auth::user()->role_as == 3)
        <li class="nav-item {{ Request::is('reference') ? 'active':'' }}">
          <a class="nav-link" href="{{ 'reference' }}">
            <i class="material-icons">room_preferences</i>
            <p>Références</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
          <a class="nav-link" href="{{ 'orders' }}">
            <i class="material-icons">fact_check</i>
            <p>Commandes</p>
          </a>
        </li>
        @endif
        @if (Auth::user()->role_as == 1)
        <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
          <a class="nav-link" href="{{ 'users' }}">
            <i class="material-icons">person</i>
            <p>Utilisateurs</p>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>