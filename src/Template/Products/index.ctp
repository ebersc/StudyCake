<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ProductID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ProductName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SupplierID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CategoryID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->ProductID) ?></td>
                <td><?= h($product->ProductName) ?></td>
                <td><?= $this->Number->format($product->SupplierID) ?></td>
                <td><?= $this->Number->format($product->CategoryID) ?></td>
                <td><?= h($product->Unit) ?></td>
                <td><?= $this->Number->format($product->Price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->ProductID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->ProductID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->ProductID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->ProductID)]) ?>
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
