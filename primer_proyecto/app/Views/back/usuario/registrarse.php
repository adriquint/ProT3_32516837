<!--inicio formulario-->
<div class="textocentrado">
  <h2>Registrarse</h2>
  <br>
  <p>Si querés formar parte del club y aprender cómo cultivar tu propio Bonsai, completá el siguiente formulario:</p>
</div>

<div class="textocentrado">

<?php $validation = \Config\Services::validation();?>    
  <form method="post" action="<?php echo base_url('/enviar-form')?>">
    <?=csrf_field();?>
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
    <?php endif?>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Escriba su nombre:</label>
      <input name="nombre" type="text" class="form-control" placeholder="Nombre">
          <?php if($validation->getError('nombre')) {?>
          <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre');?>
          </div>
          <?php }?>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Escriba su apellido:</label>
      <input name="apellido" type="text" class="form-control" placeholder="Apellido">
          <?php if($validation->getError('apellido')) {?>
          <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido');?>
          </div>
          <?php }?>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Dirección de email:</label>
      <input name="email" type="text" class="form-control" placeholder="sucorreo@algo.com">
      <div id="emailHelp" class="form-text">No compartiremos su email con nadie</div>
        <?php if($validation->getError('email')) {?>
          <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email');?>
          </div>
        <?php }?>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Usuario:</label>
      <input name="usuario" type="text" class="form-control" placeholder="Escriba su nombre de usuario">
        <?php if($validation->getError('usuario')) {?>
          <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario');?>
          </div>
        <?php }?>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input name="pass" type="text" class="form-control" placeholder="Escriba su contraseña">
        <?php if($validation->getError('pass')) {?>
          <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass');?>
          </div>
        <?php }?>
    </div>

    <!--<div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>-->
  
  <input type="submit" value="guardar" class="btn btn-success"> 
  <input type="reset" value="cancelar" class="btn btn-danger">
  </form>
</div> 
    <!--fin formulario-->