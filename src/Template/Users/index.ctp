<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
  <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h2 class="panel-title">Administradores</h2>
                  </div>
                  <div class="col col-xs-6 text-right">                  
                    <?= $this->Html->link('Crear Nuevo', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-sm btn-primary btn-create', 'escape' => false]); ?>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs"><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                        <th><?= $this->Paginator->sort('last_name', ['Apellido']) ?></th>
                        <th><?= $this->Paginator->sort('email', ['Correo Electrónico']) ?></th>  
                    </tr> 
                  </thead>
                  <tbody>
                        <?php foreach ($users as $user): ?>
                          <tr>
                            <td align="center">                        
                              <?= $this->Html->link('<em class="fa fa-pencil"></em>', ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-info', 'escape' => false]); ?>
                              <?= $this->Form->postLink('<em class="fa fa-trash"></em>', ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => '¿Eliminar enlace?', 'class' => 'btn btn-danger', 'escape' => false]) ?>
                            </td>
                            <td class="hidden-xs"><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>
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