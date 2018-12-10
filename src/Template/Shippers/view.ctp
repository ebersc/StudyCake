<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipper $shipper
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shipper'), ['action' => 'edit', $shipper->ShipperID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipper'), ['action' => 'delete', $shipper->ShipperID], ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->ShipperID)]) ?> </li>
        <li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipper'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shippers view large-9 medium-8 columns content">
    <h3><?= h($shipper->ShipperID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ShipperName') ?></th>
            <td><?= h($shipper->ShipperName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($shipper->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ShipperID') ?></th>
            <td><?= $this->Number->format($shipper->ShipperID) ?></td>
        </tr>
    </table>
</div>
