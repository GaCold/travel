<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tour $tour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tour'), ['action' => 'edit', $tour->tour_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tour'), ['action' => 'delete', $tour->tour_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tour->tour_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typetours'), ['controller' => 'Typetours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typetour'), ['controller' => 'Typetours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tours view large-9 medium-8 columns content">
    <h3><?= h($tour->tour_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tour') ?></th>
            <td><?= $tour->has('tour') ? $this->Html->link($tour->tour->tour_id, ['controller' => 'Tours', 'action' => 'view', $tour->tour->tour_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Ten') ?></th>
            <td><?= h($tour->tour_ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Thongtintongquat') ?></th>
            <td><?= h($tour->tour_thongtintongquat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typetour') ?></th>
            <td><?= $tour->has('typetour') ? $this->Html->link($tour->typetour->typetour_id, ['controller' => 'Typetours', 'action' => 'view', $tour->typetour->typetour_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Hot') ?></th>
            <td><?= h($tour->tour_hot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Songaydi') ?></th>
            <td><?= $this->Number->format($tour->tour_songaydi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Diemdi') ?></th>
            <td><?= $this->Number->format($tour->tour_diemdi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Diemden') ?></th>
            <td><?= $this->Number->format($tour->tour_diemden) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Soluongtrenho') ?></th>
            <td><?= $this->Number->format($tour->tour_soluongtrenho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Soluongtreem') ?></th>
            <td><?= $this->Number->format($tour->tour_soluongtreem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Soluongnguoilon') ?></th>
            <td><?= $this->Number->format($tour->tour_soluongnguoilon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Dathdv') ?></th>
            <td><?= $this->Number->format($tour->tour_dathdv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Tientt') ?></th>
            <td><?= $this->Number->format($tour->tour_tientt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Trangthai') ?></th>
            <td><?= $this->Number->format($tour->tour_trangthai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Ngaydi') ?></th>
            <td><?= h($tour->tour_ngaydi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Thoihandk') ?></th>
            <td><?= h($tour->tour_thoihandk) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Status') ?></th>
            <td><?= $tour->tour_status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
