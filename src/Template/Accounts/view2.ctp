<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account $account
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->account_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->account_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->account_firstname) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Account Firstname') ?></th>
            <td><?= h($account->account_firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Lastname') ?></th>
            <td><?= h($account->account_lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $account->has('role') ? $this->Html->link($account->role->role_name, ['controller' => 'Roles', 'action' => 'view', $account->role->role_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($account->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Card') ?></th>
            <td><?= h($account->account_card) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Phone') ?></th>
            <td><?= h($account->account_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($account->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Address') ?></th>
            <td><?= h($account->account_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Id') ?></th>
            <td><?= $this->Number->format($account->account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Sex') ?></th>
            <td><?= $this->Number->format($account->account_sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Birthday') ?></th>
            <td><?= h($account->account_birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Status') ?></th>
            <td><?= $account->account_status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
