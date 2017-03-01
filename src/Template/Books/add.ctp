<?= $this->Html->css('add') ?>
<?= $this->Html->css('sweetalert') ?>
<?= $this->Html->script('add') ?>
<?= $this->Html->script('sweetalert.min') ?>

<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <?= $this->Form->create($book, ['type' => 'file', 'novalidate']) ?>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel">
                    <div class="panel-heading custom-header-panel">
                        <h3 class="panel-title roboto">Agregar Libro</h3>
                    </div>
                    <div class="panel-body">
                        <fieldset>    
                            <?php 
                            echo '<div class="form-group">';
                            echo $this->Form->input('titulo',['class' => 'form-control', 'label' => 'Título:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('autor', ['class' => 'form-control', 'label' => 'Autor:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('descripcion',['class' => 'form-control', 'label' => 'Descripción:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('image', ['class' => 'form-control', 'label' => 'Descripción de la Imagen:']);
                            echo '</div>';
                            echo '<div class="form-group">';
                            echo $this->Form->input('image_dir',['class' => 'form-control', 'label' => 'Dirección de la Imagen:', 'type' => 'text', 'placeholder' => 'Copia y pega la url']);
                            echo '</div>';
                            echo '</br>';
                            echo '<span class="btn-lg btn-info btn-file">
                                   Seleccionar PDF <input type="file" name="UploadBook" id="UploadBook" accept="application/pdf" >
                                  </span>';
                             
                            ?> 
                        </fieldset>
                        <div class="form-group text-center"></br></br>
                            <?= $this->Form->button('Añadir Libro', ['id' => 'upload', 'name' => 'upload', 'class' => 'btn btn-orange-md roboto']) ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>          
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>    