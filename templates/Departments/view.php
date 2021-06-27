<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments view content">
            <h3><?= h($department->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($department->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($department->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($department->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($department->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($department->deleted_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Employees') ?></h4>
                <?php if (!empty($department->employees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Employee No') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Job Position Id') ?></th>
                            <th><?= __('Employee Status') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Middle Name') ?></th>
                            <th><?= __('Name Extension') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Blood Type') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Birth Date') ?></th>
                            <th><?= __('Birth Place') ?></th>
                            <th><?= __('Citizenship') ?></th>
                            <th><?= __('Citizenship Country') ?></th>
                            <th><?= __('Residential Address') ?></th>
                            <th><?= __('Residential Zipcode') ?></th>
                            <th><?= __('Telephone No') ?></th>
                            <th><?= __('Mobile No') ?></th>
                            <th><?= __('Gsis Id No') ?></th>
                            <th><?= __('Pagibig Id No') ?></th>
                            <th><?= __('Philhealth No') ?></th>
                            <th><?= __('Sss No') ?></th>
                            <th><?= __('Tin No') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($department->employees as $employees) : ?>
                        <tr>
                            <td><?= h($employees->id) ?></td>
                            <td><?= h($employees->role_id) ?></td>
                            <td><?= h($employees->employee_no) ?></td>
                            <td><?= h($employees->department_id) ?></td>
                            <td><?= h($employees->job_position_id) ?></td>
                            <td><?= h($employees->employee_status) ?></td>
                            <td><?= h($employees->last_name) ?></td>
                            <td><?= h($employees->first_name) ?></td>
                            <td><?= h($employees->middle_name) ?></td>
                            <td><?= h($employees->name_extension) ?></td>
                            <td><?= h($employees->email) ?></td>
                            <td><?= h($employees->blood_type) ?></td>
                            <td><?= h($employees->gender) ?></td>
                            <td><?= h($employees->birth_date) ?></td>
                            <td><?= h($employees->birth_place) ?></td>
                            <td><?= h($employees->citizenship) ?></td>
                            <td><?= h($employees->citizenship_country) ?></td>
                            <td><?= h($employees->residential_address) ?></td>
                            <td><?= h($employees->residential_zipcode) ?></td>
                            <td><?= h($employees->telephone_no) ?></td>
                            <td><?= h($employees->mobile_no) ?></td>
                            <td><?= h($employees->gsis_id_no) ?></td>
                            <td><?= h($employees->pagibig_id_no) ?></td>
                            <td><?= h($employees->philhealth_no) ?></td>
                            <td><?= h($employees->sss_no) ?></td>
                            <td><?= h($employees->tin_no) ?></td>
                            <td><?= h($employees->image) ?></td>
                            <td><?= h($employees->created) ?></td>
                            <td><?= h($employees->modified) ?></td>
                            <td><?= h($employees->deleted) ?></td>
                            <td><?= h($employees->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
