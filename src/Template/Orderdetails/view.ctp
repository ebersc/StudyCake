<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail $orderdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orderdetail'), ['action' => 'edit', $orderdetail->OrderDetailID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orderdetail'), ['action' => 'delete', $orderdetail->OrderDetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderdetails view large-9 medium-8 columns content">
    <h3><?= h($orderdetail->OrderDetailID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('OrderDetailID') ?></th>
            <td><?= $this->Number->format($orderdetail->OrderDetailID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderID') ?></th>
            <td><?= $this->Number->format($orderdetail->OrderID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($orderdetail->ProductID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($orderdetail->Quantity) ?></td>
        </tr>
    </table>
</div>
