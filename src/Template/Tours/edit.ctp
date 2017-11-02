<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tour->tour_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tour->tour_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typetours'), ['controller' => 'Typetours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typetour'), ['controller' => 'Typetours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tours form large-9 medium-8 columns content">
    <?= $this->Form->create($tour) ?>
    <fieldset>
        <legend><?= __('Edit Tour') ?></legend>
        <?php
            echo $this->Form->control('tour_ten');
            echo $this->Form->control('tour_thongtintongquat');
            echo $this->Form->control('tour_ngaydi');
            echo $this->Form->control('tour_songaydi');
            echo $this->Form->control('tour_diemdi');
            echo $this->Form->control('tour_diemden');
            echo $this->Form->control('tour_soluongtrenho');
            echo $this->Form->control('tour_soluongtreem');
            echo $this->Form->control('tour_soluongnguoilon');
            echo $this->Form->control('tour_dathdv');
            echo $this->Form->control('tour_tientt');
            echo $this->Form->control('loaitour_id', ['options' => $typetours]);
            echo $this->Form->control('tour_hot');
            echo $this->Form->control('tour_trangthai');
            echo $this->Form->control('tour_thoihandk', ['empty' => true]);
            echo $this->Form->control('tour_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
