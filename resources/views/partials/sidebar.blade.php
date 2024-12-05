<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <img src="{{ asset('assets/Logo-removebg-preview.png') }}" alt="" height="200" width="200" >
  </div>
  <ul class="nav-links">
    <li>
      <a href="/admin" class="{{ request()->Is('admin*') ? 'active' : '' }}">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/product" class="{{ request()->Is('product*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Produk</span>
      </a>
    </li>
    <li>
      <a href="/transaksi" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Transaksi</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
