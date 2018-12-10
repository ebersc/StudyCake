<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->SupplierID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->SupplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->SupplierID)]) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="suppliers view large-9 medium-8 columns content">
    <h3><?= h($supplier->SupplierID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SupplierName') ?></th>
            <td><?= h($supplier->SupplierName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ContactName') ?></th>
            <td><?= h($supplier->ContactName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($supplier->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($supplier->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostalCode') ?></th>
            <td><?= h($supplier->PostalCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($supplier->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($supplier->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SupplierID') ?></th>
            <td><?= $this->Number->format($supplier->SupplierID) ?></td>
        </tr>
    </table>
</div>
