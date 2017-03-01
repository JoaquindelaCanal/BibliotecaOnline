<?= $this->Html->css('add') ?>
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">
    <div class="col-md-12">
    <?= $this->Form->create($user, ['novalidate'], ['class' => 'form-horizontal']) ?>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel">
                    <div class="panel-heading custom-header-panel">
                        <h3 class="panel-title roboto">Editar Admin</h3>
                    </div>
                    <div class="panel-body">
                        <fieldset>    
                            <?php 
                            echo '<div class="form-group">';
                            echo $this->Form->input('first_name',['class' => 'form-control', 'label' => 'Nombre:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('last_name', ['class' => 'form-control', 'label' => 'Apellido:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('email',['class' => 'form-control', 'label' => 'Correo Electrónico:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('password', ['class' => 'form-control', 'label' => 'Contraseña']);
                            echo '</div>';                      
                            ?> 
                        </fieldset>
                        <div class="form-group text-center"></br></br>
                            <?= $this->Form->button('Edit Admin', ['class' => 'btn btn-orange-md roboto']) ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>          
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>    