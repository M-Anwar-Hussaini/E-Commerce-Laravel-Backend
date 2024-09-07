<div class="sidebar border-right col-md-3 col-lg-2 bg-body-tertiary border p-0">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" id="sidebarMenu" aria-labelledby="sidebarMenuLabel"
    tabindex="-1">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">React T-Shirts</h5>
      <button class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" type="button"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column pt-lg-3 overflow-y-auto p-0">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#" aria-current="page">
            <i class="fas fa-dashboard"></i>
            Dashboard
          </a>
        </li>
      </ul>
      <hr class="my-3">
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#"
            onclick="document.getElementById('AdminLogoutForm').submit()">
            <svg class="bi">
              <use xlink:href="#door-closed" />
            </svg>
            Sign out
          </a>
          <form id="AdminLogoutForm" action="{{ route('admin.logout') }}" method="POST">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
