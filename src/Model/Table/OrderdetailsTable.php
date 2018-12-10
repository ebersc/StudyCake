<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orderdetails Model
 *
 * @method \App\Model\Entity\Orderdetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orderdetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Orderdetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderdetail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderdetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail findOrCreate($search, callable $callback = null, $options = [])
 */
class OrderdetailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orderdetails');
        $this->setDisplayField('OrderDetailID');
        $this->setPrimaryKey('OrderDetailID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('OrderDetailID')
            ->allowEmpty('OrderDetailID', 'create');

        $validator
            ->integer('OrderID')
            ->allowEmpty('OrderID');

        $validator
            ->integer('ProductID')
            ->allowEmpty('ProductID');

        $validator
            ->integer('Quantity')
            ->allowEmpty('Quantity');

        return $validator;
    }
}
