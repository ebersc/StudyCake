<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipper $shipper
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shippers form large-9 medium-8 columns content">
    <?= $this->Form->create($shipper) ?>
    <fieldset>
        <legend><?= __('Add Shipper') ?></legend>
        <?php
            echo $this->Form->control('ShipperName');
            echo $this->Form->control('Phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
