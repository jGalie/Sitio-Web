<!--BARRA DE NAVEGACION-->
<?php
  $session = session();
  $nombre= $session->get('nombre');
  $perfil=$session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg bg-body-pastel pink">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
      <!-- logo/marca de la empresa-->
      <img src="<?php echo base_url('assets/img/logo-tukit.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
    </a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
          </div>
  <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
          <a class="nav-link" href='registro'>Registrarse</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Login</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  <?php elseif(session()->perfil_id == 2): ?>
    <div class="btn btn-info active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      <!-- navbar PARA CLIENTES que pueden comprar-->

      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href='quienes_somos'>Quienes Somos</a></li>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
        </li> 
        </ul> 
      </div>
    <?php else:?>
    <!-- NAVBAR PARA CLIENTES NO LOGUEADOS--> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quiénes Somos</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acercade'>Acerca de</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='catalogo'>Catálogo</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='compra'>Compra</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Login</a></li>
        </li> 
        </ul> 
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>
</nav>
<!-- fin barra de navegación-->