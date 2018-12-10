<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shippers Model
 *
 * @method \App\Model\Entity\Shipper get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shipper newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shipper[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shipper|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipper|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shipper[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shipper findOrCreate($search, callable $callback = null, $options = [])
 */
class ShippersTable extends Table
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

        $this->setTable('shippers');
        $this->setDisplayField('ShipperID');
        $this->setPrimaryKey('ShipperID');
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
            ->integer('ShipperID')
            ->allowEmpty('ShipperID', 'create');

        $validator
            ->scalar('ShipperName')
            ->maxLength('ShipperName', 255)
            ->allowEmpty('ShipperName');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 255)
            ->allowEmpty('Phone');

        return $validator;
    }
}
