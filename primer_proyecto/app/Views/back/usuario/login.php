<div class="container mt-5 mb-5 d-flex justify-content-center">
  <div class="card" style="width:50%">
      <div class="card-header text-center">
      <h2>Iniciar sesión</h2>
  </div>

<!-- Mensaje de error -->
  <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg')?>
    </div>
    <?php endif;?>

<!-- Inicio de formulario de login -->
  <form method="post" action="<?php echo base_url('/enviarlogin')?>">
    <div class="card-body" media="(max-width:768)">
        <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Correo</label>
            <input name="email" type="text" class="form-control" placeholder="correo">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="pass" type="text" class="form-control" placeholder="contraseña">
        </div>
  
        <input type="submit" value="Ingresar" class="btn btn-success">
        <a href="<?php echo base_url('login');?>" class="btn btn-danger">Cancelar</a>
        <br>
        <span>¿Aún no se registró?
            <a href="<?php echo base_url('/registro');?>">Registrarse aquí</a>
        </span>
        
    </div>
  </form>
</div>