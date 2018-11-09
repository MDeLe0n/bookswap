<div class="login-page">
  <div class="form">
   
    <?php
    echo $this->Form->create('Login',array('class'=>'login-form'));
    echo $this->Form->input('Usuario',array('placeholder'=>'Usuario'));
    echo $this->Form->input('Contraseña',array('placeholder'=>'Contraseña','type'=>'password'));
    echo $this->Form->submit('Entrar',array('class'=>'btn btn-primary btn-block'));
    echo $this->Form->end();
    ?>
  </div>
</div>