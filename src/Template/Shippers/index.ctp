<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipper[]|\Cake\Collection\CollectionInterface $shippers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shipper'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shippers index large-9 medium-8 columns content">
    <h3><?= __('Shippers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ShipperID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ShipperName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shippers as $shipper): ?>
            <tr>
                <td><?= $this->Number->format($shipper->ShipperID) ?></td>
                <td><?= h($shipper->ShipperName) ?></td>
                <td><?= h($shipper->Phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shipper->ShipperID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shipper->ShipperID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shipper->ShipperID], ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->ShipperID)]) ?>
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
