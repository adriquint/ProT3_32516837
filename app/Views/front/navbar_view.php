<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?>

<!--Inicio navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
      <!--Copié la profe-->
        <div class="navbar-header">
            <a class="navbar-brand me-auto" href="<?php echo base_url('principal')?>">
            <img src="<?php echo base_url('assets/img/inicio1.jpg')?>" alt="marca" width="40" height="10" class="img-fluid"/>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(session()->perfil_id == 1):?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre');?></a>
          </div>

        <a class="navbar-brand" href="#"></a> <!--De profe, tmb esta en bootstrap-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--<li><img src="img/inicio1.jpg"></li> Creo qur agregué yo-->
            <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quienes somos</a> <!--Acá van rutas>-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarse">Formar parte del Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
            </li>
          </ul>
        </div>

        <?php elseif(session()->perfil_id==2):?>
          <div class="btn btn-info active btnUser btn-sm">
            <a href="">CLIENTE: <?php echo session('nombre');?></a>
          </div>

        <!-- Navbar para Clientes que pueden comprar-->
        <a class="navbar-brand" href="#"></a> <!--De profe, tmb esta en bootstrap-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quienes somos</a> <!--Acá van rutas>-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="que_es">¿Qué es un Bonsai?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tiposdebonsai">Tipos de Bonsai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">¿Cómo cultivar tu propio Bonsai?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
            </li>
            <!--Navbar desplegable anterior
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Más información
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="que_es">¿Qué es es un bonsai?</a></li>
                <li><a class="dropdown-item" href="tiposdebonsai">Tipos de bonsai</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Como cultivarlos</a></li>
              </ul>
            </li>-->
          </ul>
        </div>

        <?php else:?>

        <!-- Navbar para Clientes no logueados-->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarse">Formar parte del Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tienda</a>
            </li>            
          </ul>
        </div>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
          
        <?php endif;?>

      </div>
      </div>
</nav>
<!--Fin navbar-->