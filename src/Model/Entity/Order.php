<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $OrderID
 * @property int $CustomerID
 * @property int $EmployeeID
 * @property \Cake\I18n\FrozenDate $OrderDate
 * @property int $ShipperID
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'CustomerID' => true,
        'EmployeeID' => true,
        'OrderDate' => true,
        'ShipperID' => true
    ];
}
