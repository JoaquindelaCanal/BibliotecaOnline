<?= $this->Html->css('menu') ?>
<!-- http://bootsnipp.com/snippets/xaQoQ -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                    <b><?= $this->Html->link('Biblioteca', ['controller' => 'Books', 'action' => 'index'], ['class' => 'navbar-brand', 'escape' => false]); ?></b>                                 
                </div>
                <?php if(isset($current_user)): ?>
                <div class="col-sm-6">
                    <ul class="list-unstyled row row-no-gutter">
                        <li class="col-sm-3"></li>
                        <li class="col-sm-3">
                            <a href="#" class="navbar-btn btn-lg btn-danger btn-plus dropdown-toggle" data-toggle="dropdown">
                            Administrar<small>
                            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></small>
                            </a>
                            <ul class="nav dropdown-menu">
                            <li>
                                <?= $this->Html->link('<i class="glyphicon glyphicon-user" style="color:#0830f7;"></i> Admins', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                            </li>
        		            <li><?= $this->Html->link('<i class="glyphicon glyphicon-book" style="color:#20a25f;"></i> Libros', ['controller' => 'Books', 'action' => 'adminbooks'], ['escape' => false]); ?> </li>
                            <li class="divider"></li>
                           
                            <li><?= $this->Html->link('<i class="glyphicon glyphicon-off" style="color:#f80d0d;"></i> Cerrar Sesión', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]); ?> </li>
                            </ul>
                        </li>
                        <li class="col-sm-3"></li>
                    </ul>
                </div>
                <?php else: ?>
                   <div class="col-sm-5"></div>
                <?php endif; ?>
                
                <div class="col-sm-5">
                    <div class="vertical-align-md">
                        <form role="search">
                            <div class="input-group input-group-lg input-group-full">
                              <input type="text" class="form-control" aria-label="Search" placeholder="Buscar PDF">
                              <div class="input-group-btn">
                              <button type="button" class="btn btn-default" aria-label="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</nav>