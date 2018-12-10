<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('CustomerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CustomerName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ContactName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('City') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostalCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->CustomerID) ?></td>
                <td><?= h($customer->CustomerName) ?></td>
                <td><?= h($customer->ContactName) ?></td>
                <td><?= h($customer->Address) ?></td>
                <td><?= h($customer->City) ?></td>
                <td><?= h($customer->PostalCode) ?></td>
                <td><?= h($customer->Country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->CustomerID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->CustomerID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->CustomerID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID)]) ?>
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
