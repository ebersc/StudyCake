<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail $orderdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="orderdetails form large-9 medium-8 columns content">
    <?= $this->Form->create($orderdetail) ?>
    <fieldset>
        <legend><?= __('Add Orderdetail') ?></legend>
        <?php
            echo $this->Form->control('OrderID');
            echo $this->Form->control('ProductID');
            echo $this->Form->control('Quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
