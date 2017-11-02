<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tour[]|\Cake\Collection\CollectionInterface $tours
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typetours'), ['controller' => 'Typetours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typetour'), ['controller' => 'Typetours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tours index large-9 medium-8 columns content">
    <h3><?= __('Tours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_ten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_thongtintongquat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_ngaydi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_songaydi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_diemdi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_diemden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_soluongtrenho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_soluongtreem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_soluongnguoilon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_dathdv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_tientt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('loaitour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_hot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_trangthai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_thoihandk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tours as $tour): ?>
            <tr>
                <td><?= $tour->has('tour') ? $this->Html->link($tour->tour->tour_id, ['controller' => 'Tours', 'action' => 'view', $tour->tour->tour_id]) : '' ?></td>
                <td><?= h($tour->tour_ten) ?></td>
                <td><?= h($tour->tour_thongtintongquat) ?></td>
                <td><?= h($tour->tour_ngaydi) ?></td>
                <td><?= $this->Number->format($tour->tour_songaydi) ?></td>
                <td><?= $this->Number->format($tour->tour_diemdi) ?></td>
                <td><?= $this->Number->format($tour->tour_diemden) ?></td>
                <td><?= $this->Number->format($tour->tour_soluongtrenho) ?></td>
                <td><?= $this->Number->format($tour->tour_soluongtreem) ?></td>
                <td><?= $this->Number->format($tour->tour_soluongnguoilon) ?></td>
                <td><?= $this->Number->format($tour->tour_dathdv) ?></td>
                <td><?= $this->Number->format($tour->tour_tientt) ?></td>
                <td><?= $tour->has('typetour') ? $this->Html->link($tour->typetour->typetour_id, ['controller' => 'Typetours', 'action' => 'view', $tour->typetour->typetour_id]) : '' ?></td>
                <td><?= h($tour->tour_hot) ?></td>
                <td><?= $this->Number->format($tour->tour_trangthai) ?></td>
                <td><?= h($tour->tour_thoihandk) ?></td>
                <td><?= h($tour->tour_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tour->tour_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tour->tour_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tour->tour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tour->tour_id)]) ?>
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
