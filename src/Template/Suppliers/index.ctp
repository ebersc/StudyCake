<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suppliers index large-9 medium-8 columns content">
    <h3><?= __('Suppliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('SupplierID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SupplierName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ContactName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('City') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostalCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?= $this->Number->format($supplier->SupplierID) ?></td>
                <td><?= h($supplier->SupplierName) ?></td>
                <td><?= h($supplier->ContactName) ?></td>
                <td><?= h($supplier->Address) ?></td>
                <td><?= h($supplier->City) ?></td>
                <td><?= h($supplier->PostalCode) ?></td>
                <td><?= h($supplier->Country) ?></td>
                <td><?= h($supplier->Phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->SupplierID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->SupplierID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->SupplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->SupplierID)]) ?>
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
