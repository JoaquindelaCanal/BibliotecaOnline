<?= $this->Html->css('books') ?>
<?= $this->Html->script('books') ?>

<div class="container" style="margin-top:40px">
 <?php foreach ($books as $book): ?>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <div class="panel panel-default panel-horizontal">
                <div class="panel-heading">
                    <img src="<?= h($book->image_dir) ?>" alt="<?= h($book->image) ?>" class="imgn">
                </div>
                <div class="panel-body">
                    <h2 id="tittle" class="panel-tittle"><bold><?= h($book->titulo) ?></bold></h2>
                    <h6 id="autor">Autor: <?= h($book->autor) ?></h6>
                    <p><?= h($book->descripcion) ?></p>
                    <?= $this->Form->postLink('Descargar', ['controller' => 'Books', 'action' => 'download', $book->id], ['class' => 'btn-lg btn-success', 'escape' => false]) ?>
                </div>
            </div>
        </div>
    </div>
 <?php endforeach ?>    
</div>
<div class="panel-footer">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>