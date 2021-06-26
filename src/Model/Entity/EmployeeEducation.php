<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeeEducation Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $level_id
 * @property string|null $school_name
 * @property string|null $course_name
 * @property \Cake\I18n\FrozenDate|null $date_from
 * @property \Cake\I18n\FrozenDate|null $date_to
 * @property string|null $highest_units_earned
 * @property \Cake\I18n\FrozenDate|null $year_graduated
 * @property string|null $honors_received
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Level $level
 */
class EmployeeEducation extends Entity
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
        'level_id' => true,
        'school_name' => true,
        'course_name' => true,
        'date_from' => true,
        'date_to' => true,
        'highest_units_earned' => true,
        'year_graduated' => true,
        'honors_received' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true,
        'employee' => true,
        'level' => true,
    ];
}
