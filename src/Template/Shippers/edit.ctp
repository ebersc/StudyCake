<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipper $shipper
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shipper->ShipperID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->ShipperID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shippers form large-9 medium-8 columns content">
    <?= $this->Form->create($shipper) ?>
    <fieldset>
        <legend><?= __('Edit Shipper') ?></legend>
        <?php
            echo $this->Form->control('ShipperName');
            echo $this->Form->control('Phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
