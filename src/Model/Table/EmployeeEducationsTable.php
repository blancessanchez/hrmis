<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployeeEducations Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\LevelsTable&\Cake\ORM\Association\BelongsTo $Levels
 *
 * @method \App\Model\Entity\EmployeeEducation newEmptyEntity()
 * @method \App\Model\Entity\EmployeeEducation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeEducation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeEducation get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeeEducation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EmployeeEducation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeEducation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeeEducation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeEducation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeeEducation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmployeeEducation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmployeeEducation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EmployeeEducation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeeEducationsTable extends Table
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

        $this->setTable('employee_educations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Levels', [
            'foreignKey' => 'level_id',
            'joinType' => 'INNER',
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
            ->scalar('school_name')
            ->maxLength('school_name', 255)
            ->allowEmptyString('school_name');

        $validator
            ->scalar('course_name')
            ->maxLength('course_name', 255)
            ->allowEmptyString('course_name');

        $validator
            ->date('date_from')
            ->allowEmptyDate('date_from');

        $validator
            ->date('date_to')
            ->allowEmptyDate('date_to');

        $validator
            ->scalar('highest_units_earned')
            ->maxLength('highest_units_earned', 255)
            ->allowEmptyString('highest_units_earned');

        $validator
            ->date('year_graduated')
            ->allowEmptyDate('year_graduated');

        $validator
            ->scalar('honors_received')
            ->maxLength('honors_received', 255)
            ->allowEmptyString('honors_received');

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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'), ['errorField' => 'employee_id']);
        $rules->add($rules->existsIn(['level_id'], 'Levels'), ['errorField' => 'level_id']);

        return $rules;
    }
}
