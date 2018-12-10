<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->EmployeeID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->EmployeeID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->EmployeeID)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->EmployeeID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('LastName') ?></th>
            <td><?= h($employee->LastName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FirstName') ?></th>
            <td><?= h($employee->FirstName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($employee->Photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmployeeID') ?></th>
            <td><?= $this->Number->format($employee->EmployeeID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthDate') ?></th>
            <td><?= h($employee->BirthDate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($employee->Notes)); ?>
    </div>
</div>
