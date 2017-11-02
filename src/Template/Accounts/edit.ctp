
<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
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
