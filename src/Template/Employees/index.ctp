<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('EmployeeID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FirstName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->EmployeeID) ?></td>
                <td><?= h($employee->LastName) ?></td>
                <td><?= h($employee->FirstName) ?></td>
                <td><?= h($employee->BirthDate) ?></td>
                <td><?= h($employee->Photo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->EmployeeID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->EmployeeID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->EmployeeID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EmployeeID)]) ?>
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
