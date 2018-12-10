<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->CategoryID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->CategoryID], ['confirm' => __('Are you sure you want to delete # {0}?', $category->CategoryID)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->CategoryID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CategoryName') ?></th>
            <td><?= h($category->CategoryName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($category->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryID') ?></th>
            <td><?= $this->Number->format($category->CategoryID) ?></td>
        </tr>
    </table>
</div>
