<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->ProductID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->ProductID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->ProductID)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->ProductID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ProductName') ?></th>
            <td><?= h($product->ProductName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= h($product->Unit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($product->ProductID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SupplierID') ?></th>
            <td><?= $this->Number->format($product->SupplierID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryID') ?></th>
            <td><?= $this->Number->format($product->CategoryID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->Price) ?></td>
        </tr>
    </table>
</div>
