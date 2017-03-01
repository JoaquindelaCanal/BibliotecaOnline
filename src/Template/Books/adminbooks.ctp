<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<?= $this->Html->css('adminbooks') ?>

<div class="container">
  <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h2 class="panel-title">Libros</h2>
                  </div>
                  <div class="col col-xs-6 text-right">                  
                    <?= $this->Html->link('Crear Nuevo', ['controller' => 'Books', 'action' => 'add'], ['class' => 'btn btn-sm btn-primary btn-create', 'escape' => false]); ?>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs"><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('titulo', ['Titulo']) ?></th>
                        <th><?= $this->Paginator->sort('autor', ['Autor']) ?></th>
                        <th><?= $this->Paginator->sort('descripcion', ['Descripción']) ?></th>
                        <th><?= $this->Paginator->sort('image_dir', ['Portada']) ?></th>
                    </tr> 
                  </thead>
                  <tbody>
                        <?php foreach ($books as $book): ?>
                          <tr>
                            <td align="center">                            
                              <?= $this->Html->link('<em class="fa fa-pencil"></em>', ['controller' => 'Books', 'action' => 'edit', $book->id], ['class' => 'btn btn-info', 'escape' => false]); ?>
                              <?= $this->Form->postLink('<em class="fa fa-trash"></em>', ['controller' => 'Books', 'action' => 'delete', $book->id], ['confirm' => '¿Eliminar enlace?', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                            </td>
                            <td class="hidden-xs"><?= $this->Number->format($book->id) ?></td>
                            <td><?= h($book->titulo) ?></td>
                            <td><?= h($book->autor) ?></td>
                            <td><?= h($book->descripcion) ?></td>
                            <td><pre><?= h($book->image_dir) ?></pre></td>
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>         
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
            </div>
        </div>
    </div>
</div>