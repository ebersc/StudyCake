<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $EmployeeID
 * @property string $LastName
 * @property string $FirstName
 * @property \Cake\I18n\FrozenDate $BirthDate
 * @property string $Photo
 * @property string $Notes
 */
class Employee extends Entity
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
        'LastName' => true,
        'FirstName' => true,
        'BirthDate' => true,
        'Photo' => true,
        'Notes' => true
    ];
}
