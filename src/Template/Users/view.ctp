<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Admin'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Admin'), ['action' => 'delete', $user->id], ['confirm' => __('¿Estas seguro que quieres eliminar a # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Agregar Admin'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admins view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo Electrónico') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contraseña') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
</div>
