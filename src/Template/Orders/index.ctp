<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('OrderID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CustomerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EmployeeID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OrderDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ShipperID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->OrderID) ?></td>
                <td><?= $this->Number->format($order->CustomerID) ?></td>
                <td><?= $this->Number->format($order->EmployeeID) ?></td>
                <td><?= h($order->OrderDate) ?></td>
                <td><?= $this->Number->format($order->ShipperID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->OrderID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->OrderID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->OrderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->OrderID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
