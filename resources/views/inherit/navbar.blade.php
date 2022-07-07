
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">   

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/icons/nico-logo.png') }}" alt="">
      <p>Nabunturan Integrated Cooperative</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Products and Services</a>
          <ul class="dropdown-menu">
            <li><a href="/loans" class="dropdown-item">Loans</a></li>
            <li><a href="/savings" class="dropdown-item">Savings</a></li>
            <li><a href="/agriproducttrading" class="dropdown-item">Agri Product Trading</a></li>
            <li><a href="/socialservice" class="dropdown-item">Social Service</a></li>
            <li><a href="/coopassurancecenter" class="dropdown-item">Coop Assurance Center (CAC)</a></li>
            <li><a href="/coopassurancecenter" class="dropdown-item">Online Services</a></li>
            <li><a href="/coopassurancecenter" class="dropdown-item">Other Services</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/downloadableforms">Downloadable Forms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/newsandupdates">News & Updates</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">About Us</a>
          <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">History</a></li>
            <li><a href="#" class="dropdown-item">Vision, Mission and Goals</a></li>
            <li><a href="#" class="dropdown-item">Governance</a></li>
            <li><a href="#" class="dropdown-item">Employees</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact Us</a>
          <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Write to Us</a></li>
            <li><a href="#" class="dropdown-item">See Branches</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/login" style="font-weight: 600;">Login</a>
        </li>
        <a class="nav-link btnMember" href="#">Become a Member</a>
      </ul>
    </div>
  </div>
</nav>