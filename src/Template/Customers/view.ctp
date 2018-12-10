<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->CustomerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->CustomerID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->CustomerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CustomerName') ?></th>
            <td><?= h($customer->CustomerName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ContactName') ?></th>
            <td><?= h($customer->ContactName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($customer->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($customer->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostalCode') ?></th>
            <td><?= h($customer->PostalCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($customer->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CustomerID') ?></th>
            <td><?= $this->Number->format($customer->CustomerID) ?></td>
        </tr>
    </table>
</div>
