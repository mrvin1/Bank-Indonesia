<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu {
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
  .dropdown-menu { background-color: #f1f1f1 }
	.dropdown-menu { display: block; }
}	
/* ============ small devices .end// ============ */

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BI Kpw. Purwokerto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dokumen Masuk
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Biasa</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Rahasia</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dokumen Keluar
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li> <a class="dropdown-item" href="#"> Administratif &raquo; </a>
                    <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="#">Berita Acara &raquo;</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rahasia</a></li>
                            <li><a class="dropdown-item" href="#">Biasa</a></li>
                          </ul>
                        </li>

                      <li><a class="dropdown-item" href="#">Faksimili &raquo;</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rahasia</a></li>
                            <li><a class="dropdown-item" href="#">Biasa</a></li>
                          </ul>
                    </li>
                    
                      <li><a class="dropdown-item" href="#">Memorandum korespondensi &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Memorandum Satuan Kerja &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>

                      <li><a class="dropdown-item" href="#">Nota Kesepahaman &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Perjanjian &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Pengumuman &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Risalah &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Surat &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Surat Kuasa &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Telaahan &raquo; </a>
                        <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="#">Rahasia</a></li>
                          <li><a class="dropdown-item" href="#">Biasa</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">SK Kepala Perwakilan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">SK Gubernur BI</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Surat Jalan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Nota Debet</a></li>
            </ul>
          </li>
        </ul>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          </ul>
      </div>
    </div>
  </nav>
  
  