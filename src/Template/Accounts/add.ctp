<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Add Account') ?></legend>
        <?php
            echo $this->Form->control('account_firstname');
            echo $this->Form->control('account_lastname');
            echo $this->Form->control('account_sex');
            echo $this->Form->control('account_birthday', ['empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('email');
            echo $this->Form->control('account_card');
            echo $this->Form->control('account_phone');
            echo $this->Form->control('password');
            echo $this->Form->control('account_address');
            echo $this->Form->control('account_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
