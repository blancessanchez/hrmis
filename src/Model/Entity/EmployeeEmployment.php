<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeEmployment Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property \Cake\I18n\FrozenDate|null $hired_date
 * @property \Cake\I18n\FrozenDate|null $probationary_date
 * @property \Cake\I18n\FrozenDate|null $regularization_date
 * @property \Cake\I18n\FrozenDate|null $resigned_date
 * @property \Cake\I18n\FrozenDate|null $terminated_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\Employee $employee
 */
class EmployeeEmployment extends Entity
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
        'employee_id' => true,
        'hired_date' => true,
        'probationary_date' => true,
        'regularization_date' => true,
        'resigned_date' => true,
        'terminated_date' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true,
        'employee' => true,
    ];
}
