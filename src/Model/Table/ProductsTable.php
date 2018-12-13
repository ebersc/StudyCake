<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('ProductID');
        $this->setPrimaryKey('ProductID');
        
        $this->belongsTo('suppliers', [
           'joinType' => 'INNER',
           'foreignKey' => 'SupplierID'
        ]);
        
        /**
         * Adicionando condição de chave estrangeira
         * para as regras de validação do Cake
         */
        
        $this->belongsTo('categories', [
            'joinType' => 'INNER',
            'foreignKey' => 'CategoryID'
        ]);
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
            ->integer('ProductID')
            ->allowEmpty('ProductID', 'create');

        $validator
            ->scalar('ProductName')
            ->maxLength('ProductName', 255)
            ->allowEmpty('ProductName');

        $validator
            ->integer('SupplierID')
            ->allowEmpty('SupplierID');

        $validator
            ->integer('CategoryID')
            ->allowEmpty('CategoryID');

        $validator
            ->scalar('Unit')
            ->maxLength('Unit', 255);

        $validator
            ->decimal('Price')
            ->greaterThan('Price', 0, 'O preço deve ser maior que zero.')
            ->allowEmpty('Price');

        return $validator;
    }
    
    /**
     * Criando nossas regras
     * 
     * @param RulesChecker $rules
     * @return RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        parent::buildRules($rules);
        
        $rules->add($rules->isUnique(['ProductID'], 'ProductID já existe'));
        
        $rules->add($rules->existsIn('SupplierID', 'suppliers', 'SupplierID não esta na lista'));
        
        $rules->add($rules->existsIn('CategoryID', 'categories', 'CategoryID não esta na lista'));
        
        $rules->add(function(\App\Model\Entity\Product $entity){
            
            return !$entity->isDirty('Unity'); //Se tiver sido alterado não dara erro
           
        }, 'verifica_produto', [
            'errorField' => 'Unit',
            'message' => 'Campo Unit deve ser alterado'
        ]);
        
        return $rules;
    }
}
