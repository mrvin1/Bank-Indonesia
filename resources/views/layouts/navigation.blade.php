<header>
    <nav class="navbar navbar-light light-blue lighten-4" style="background-color: rgb(238, 237, 165);">
        <a class="navbar-brand"style="text-decoration: none" href="/home"><img src="{{Storage::url('assetsweb/logo BI.png')}}" alt="" style="max-width: 50%"></a>
    <div style="display: flex; justify-content: flex-end; padding-left: 40%">
      <a href="{{route('notice')}}" style="padding-right: 2%">  
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16" style="padding-right: 10%">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
          </svg>
        </a>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pengguna 1
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a class="dropdown-item" type="button">Manajemen Akun</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" type="button">Ganti Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout" type="button">Keluar</a>
            </div>
          </div>
    </div>      
        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <i
                class="fas fa-bars fa-1x"></i></span></button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Links -->
            <ul class="nav navbar" style="display: flex; justify-content: flex-end; padding-right: 3%">
                <li class="nav-item dropdown" style="padding: 0%">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profil Wilayah Kerja</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Profil Kpw. Purwokerto</a>
                    </div>
                  </li>
                <li class="nav-item" style="padding: 0%">
                <a class="nav-link" href="#">IKU</a>
                </li>
                <li class="nav-item" style="padding: 0%">
                <a class="nav-link" href="#">COE</a>
                </li>
                <li class="nav-item" style="padding: 0%">
                    <a class="nav-link" href="#">Bebarengan</a>
                </li>
            </ul>
            <!-- Links -->
           
            <!-- Collapsible content -->
        </nav>

    </div>  
        
       
    </nav>  
</header>