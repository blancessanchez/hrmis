<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $role_id
 * @property int $employee_no
 * @property int $department_id
 * @property int $job_position_id
 * @property int $employee_status
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $name_extension
 * @property string|null $email
 * @property string|null $blood_type
 * @property int $gender
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property string|null $birth_place
 * @property int $citizenship
 * @property int $citizenship_country
 * @property string|null $residential_address
 * @property string|null $residential_zipcode
 * @property string|null $telephone_no
 * @property string|null $mobile_no
 * @property string|null $gsis_id_no
 * @property string|null $pagibig_id_no
 * @property string|null $philhealth_no
 * @property string|null $sss_no
 * @property string|null $tin_no
 * @property string|null $image
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\JobPosition $job_position
 * @property \App\Model\Entity\ActivityLog[] $activity_logs
 * @property \App\Model\Entity\EmployeeAccount[] $employee_accounts
 * @property \App\Model\Entity\EmployeeEducation[] $employee_educations
 * @property \App\Model\Entity\EmployeeEmployment[] $employee_employments
 * @property \App\Model\Entity\LeaveBalance[] $leave_balances
 * @property \App\Model\Entity\Leave[] $leaves
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
        'role_id' => true,
        'employee_no' => true,
        'department_id' => true,
        'job_position_id' => true,
        'employee_status' => true,
        'last_name' => true,
        'first_name' => true,
        'middle_name' => true,
        'name_extension' => true,
        'email' => true,
        'blood_type' => true,
        'gender' => true,
        'birth_date' => true,
        'birth_place' => true,
        'citizenship' => true,
        'citizenship_country' => true,
        'residential_address' => true,
        'residential_zipcode' => true,
        'telephone_no' => true,
        'mobile_no' => true,
        'gsis_id_no' => true,
        'pagibig_id_no' => true,
        'philhealth_no' => true,
        'sss_no' => true,
        'tin_no' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true,
        'role' => true,
        'department' => true,
        'job_position' => true,
        'activity_logs' => true,
        'employee_accounts' => true,
        'employee_educations' => true,
        'employee_employments' => true,
        'leave_balances' => true,
        'leaves' => true,
    ];
}
