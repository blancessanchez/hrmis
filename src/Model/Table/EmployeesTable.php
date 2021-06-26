<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\JobPositionsTable&\Cake\ORM\Association\BelongsTo $JobPositions
 * @property \App\Model\Table\ActivityLogsTable&\Cake\ORM\Association\HasMany $ActivityLogs
 * @property \App\Model\Table\EmployeeAccountsTable&\Cake\ORM\Association\HasMany $EmployeeAccounts
 * @property \App\Model\Table\EmployeeEducationsTable&\Cake\ORM\Association\HasMany $EmployeeEducations
 * @property \App\Model\Table\EmployeeEmploymentsTable&\Cake\ORM\Association\HasMany $EmployeeEmployments
 * @property \App\Model\Table\LeaveBalancesTable&\Cake\ORM\Association\HasMany $LeaveBalances
 * @property \App\Model\Table\LeavesTable&\Cake\ORM\Association\HasMany $Leaves
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('JobPositions', [
            'foreignKey' => 'job_position_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ActivityLogs', [
            'foreignKey' => 'employee_id',
        ]);
        $this->hasMany('EmployeeAccounts', [
            'foreignKey' => 'employee_id',
        ]);
        $this->hasMany('EmployeeEducations', [
            'foreignKey' => 'employee_id',
        ]);
        $this->hasMany('EmployeeEmployments', [
            'foreignKey' => 'employee_id',
        ]);
        $this->hasMany('LeaveBalances', [
            'foreignKey' => 'employee_id',
        ]);
        $this->hasMany('Leaves', [
            'foreignKey' => 'employee_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('employee_no')
            ->requirePresence('employee_no', 'create')
            ->notEmptyString('employee_no');

        $validator
            ->integer('employee_status')
            ->requirePresence('employee_status', 'create')
            ->notEmptyString('employee_status');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 255)
            ->allowEmptyString('middle_name');

        $validator
            ->scalar('name_extension')
            ->maxLength('name_extension', 255)
            ->allowEmptyString('name_extension');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('blood_type')
            ->maxLength('blood_type', 10)
            ->allowEmptyString('blood_type');

        $validator
            ->integer('gender')
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->scalar('birth_place')
            ->maxLength('birth_place', 10)
            ->allowEmptyString('birth_place');

        $validator
            ->integer('citizenship')
            ->requirePresence('citizenship', 'create')
            ->notEmptyString('citizenship');

        $validator
            ->integer('citizenship_country')
            ->requirePresence('citizenship_country', 'create')
            ->notEmptyString('citizenship_country');

        $validator
            ->scalar('residential_address')
            ->maxLength('residential_address', 10)
            ->allowEmptyString('residential_address');

        $validator
            ->scalar('residential_zipcode')
            ->maxLength('residential_zipcode', 10)
            ->allowEmptyString('residential_zipcode');

        $validator
            ->scalar('telephone_no')
            ->maxLength('telephone_no', 10)
            ->allowEmptyString('telephone_no');

        $validator
            ->scalar('mobile_no')
            ->maxLength('mobile_no', 10)
            ->allowEmptyString('mobile_no');

        $validator
            ->scalar('gsis_id_no')
            ->maxLength('gsis_id_no', 10)
            ->allowEmptyString('gsis_id_no');

        $validator
            ->scalar('pagibig_id_no')
            ->maxLength('pagibig_id_no', 10)
            ->allowEmptyString('pagibig_id_no');

        $validator
            ->scalar('philhealth_no')
            ->maxLength('philhealth_no', 10)
            ->allowEmptyString('philhealth_no');

        $validator
            ->scalar('sss_no')
            ->maxLength('sss_no', 10)
            ->allowEmptyString('sss_no');

        $validator
            ->scalar('tin_no')
            ->maxLength('tin_no', 10)
            ->allowEmptyString('tin_no');

        $validator
            ->scalar('image')
            ->maxLength('image', 10)
            ->allowEmptyFile('image');

        $validator
            ->integer('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['role_id'], 'Roles'), ['errorField' => 'role_id']);
        $rules->add($rules->existsIn(['department_id'], 'Departments'), ['errorField' => 'department_id']);
        $rules->add($rules->existsIn(['job_position_id'], 'JobPositions'), ['errorField' => 'job_position_id']);

        return $rules;
    }
}
