<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $accounts
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts index large-9 medium-8 columns content">
    <h3><?= __('Accounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_card') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->account_id) ?></td>
                <td><?= h($account->account_firstname) ?></td>
                <td><?= h($account->account_lastname) ?></td>
                <td><?= $this->Number->format($account->account_sex) ?></td>
                <td><?= h($account->account_birthday) ?></td>
                <td><?= $account->has('role') ? $this->Html->link($account->role->role_name, ['controller' => 'Roles', 'action' => 'view', $account->role->role_id]) : '' ?></td>
                <td><?= h($account->email) ?></td>
                <td><?= h($account->account_card) ?></td>
                <td><?= h($account->account_phone) ?></td>
                <td><?= h($account->password) ?></td>
                <td><?= h($account->account_address) ?></td>
                <td><?= h($account->account_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->account_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->account_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->account_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
