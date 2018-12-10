<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->OrderID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->OrderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->OrderID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->OrderID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('OrderID') ?></th>
            <td><?= $this->Number->format($order->OrderID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CustomerID') ?></th>
            <td><?= $this->Number->format($order->CustomerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmployeeID') ?></th>
            <td><?= $this->Number->format($order->EmployeeID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ShipperID') ?></th>
            <td><?= $this->Number->format($order->ShipperID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderDate') ?></th>
            <td><?= h($order->OrderDate) ?></td>
        </tr>
    </table>
</div>
