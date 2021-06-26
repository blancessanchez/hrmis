<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Leave Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $leave_type_id
 * @property string|null $reason
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property \Cake\I18n\FrozenDate|null $end_date
 * @property string|null $commutation
 * @property int $status
 * @property int $is_approved_by_employee_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\LeaveType $leave_type
 * @property \App\Model\Entity\IsApprovedByEmployee $is_approved_by_employee
 */
class Leave extends Entity
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
        'leave_type_id' => true,
        'reason' => true,
        'start_date' => true,
        'end_date' => true,
        'commutation' => true,
        'status' => true,
        'is_approved_by_employee_id' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true,
        'employee' => true,
        'leave_type' => true,
        'is_approved_by_employee' => true,
    ];
}
