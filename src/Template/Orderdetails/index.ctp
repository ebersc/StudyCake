<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail[]|\Cake\Collection\CollectionInterface $orderdetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderdetails index large-9 medium-8 columns content">
    <h3><?= __('Orderdetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('OrderDetailID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OrderID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ProductID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderdetails as $orderdetail): ?>
            <tr>
                <td><?= $this->Number->format($orderdetail->OrderDetailID) ?></td>
                <td><?= $this->Number->format($orderdetail->OrderID) ?></td>
                <td><?= $this->Number->format($orderdetail->ProductID) ?></td>
                <td><?= $this->Number->format($orderdetail->Quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderdetail->OrderDetailID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderdetail->OrderDetailID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderdetail->OrderDetailID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailID)]) ?>
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
