<?= $this->Html->css('add') ?>
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>


<div class="container">
    <div class="row">
    <div class="col-md-12">
    <?= $this->Form->create($book, ['novalidate']) ?>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel">
                    <div class="panel-heading custom-header-panel">
                        <h3 class="panel-title roboto">Editar Libro</h3>
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
                            ?> 
                        </fieldset>
                        <div class="form-group text-left"></br></br>
                            <?= $this->Form->button('Editar', ['class' => 'btn btn-lightblue-md roboto']) ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>          
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>    