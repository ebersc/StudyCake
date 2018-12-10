<h4><?= $nome ?? 'teste' ?></h4>
<?php

    echo $this->Html->nestedList([
       'Busca' => $this->Html->link('Busca', '/shippers/busca'), 
       'Busca1' => $this->Html->link('Busca1', ['controller' => 'shippers', 'action' => 'busca1']),
       'Busca2' => $this->Html->link('Busca2', ['controller' => 'shippers', 'action' => 'busca2']),
        'Outros' => [
            'Google' => $this->Html->link('Google', '//google.com'),
            'Microsoft' => $this->Html->link('Microsoft', '//microsoft.com', ['target' => '_blank', 'class' => 'button button-primary']),
            'Busca2' => $this->Html->link('Busca2', ['controller' => 'shippers', 'action' => 'busca2', '?' => ['nome' => 'cakephp'], '#' =>'top']),
        ]
    ]);

?>
