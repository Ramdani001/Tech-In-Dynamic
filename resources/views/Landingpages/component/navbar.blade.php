<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid m-2">
      <a class="navbar-brand d-flex gap-2" href="#" style="align-items: center">
        <img src="{{ url('/img/logo.png') }}" alt="" style="width: 40px;">
        <h6 class="p-1 pt-1 fw-bold w-50 d-flex flex-wrap" style="">
            <span>TECT-IN </span>
            <span>DYNAMIC</span>
        </h6>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-md-flex" style="align-items: center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 w-full gap-1 gap-lg-5 ps-lg-5 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Menu</a>
          </li>
        </ul>
        <form class="d-none d-lg-flex w-full gap-2 pt-md-3 ms-lg-2" style="align-items: center;" role="search">
            
            <div class="d-flex justify-content-end " style="" onclick="changeSearch()">
                <input type="text" class="form-control de-active" id="search" name="search" placeholder="Search">
                <div class="p-2 me-1 ms-1" style="border-radius: 100%; background-color: #D9D9D9; cursor: pointer;">
                    <img src="{{ url('/img/search.png') }}" alt="" style="width: 20px; height: 20px;">
                </div>
            </div>
            <button class="btn me-2" style="background-color: #D9D9D9; font-size: 13px; width: 100px; border-radius: 28px;" type="button">Sign Up</button>
            <button class="btn me-2" style="background-color: #D9D9D9; font-size: 13px; width: 100px; border-radius: 28px;" type="button">Sign Up</button>
        </form>

      </div>
    </div>
  </nav>