<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $employee->has('department') ? $this->Html->link($employee->department->name, ['controller' => 'Departments', 'action' => 'view', $employee->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Job Position') ?></th>
                    <td><?= $employee->has('job_position') ? $this->Html->link($employee->job_position->title, ['controller' => 'JobPositions', 'action' => 'view', $employee->job_position->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($employee->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($employee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Middle Name') ?></th>
                    <td><?= h($employee->middle_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Extension') ?></th>
                    <td><?= h($employee->name_extension) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blood Type') ?></th>
                    <td><?= h($employee->blood_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Place') ?></th>
                    <td><?= h($employee->birth_place) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residential Address') ?></th>
                    <td><?= h($employee->residential_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residential Zipcode') ?></th>
                    <td><?= h($employee->residential_zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone No') ?></th>
                    <td><?= h($employee->telephone_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile No') ?></th>
                    <td><?= h($employee->mobile_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gsis Id No') ?></th>
                    <td><?= h($employee->gsis_id_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagibig Id No') ?></th>
                    <td><?= h($employee->pagibig_id_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Philhealth No') ?></th>
                    <td><?= h($employee->philhealth_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sss No') ?></th>
                    <td><?= h($employee->sss_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tin No') ?></th>
                    <td><?= h($employee->tin_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($employee->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role Id') ?></th>
                    <td><?= $this->Number->format($employee->role_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee No') ?></th>
                    <td><?= $this->Number->format($employee->employee_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee Status') ?></th>
                    <td><?= $this->Number->format($employee->employee_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $this->Number->format($employee->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Citizenship') ?></th>
                    <td><?= $this->Number->format($employee->citizenship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Citizenship Country') ?></th>
                    <td><?= $this->Number->format($employee->citizenship_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($employee->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($employee->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employee->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($employee->deleted_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Activity Logs') ?></h4>
                <?php if (!empty($employee->activity_logs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->activity_logs as $activityLogs) : ?>
                        <tr>
                            <td><?= h($activityLogs->id) ?></td>
                            <td><?= h($activityLogs->employee_id) ?></td>
                            <td><?= h($activityLogs->description) ?></td>
                            <td><?= h($activityLogs->created) ?></td>
                            <td><?= h($activityLogs->modified) ?></td>
                            <td><?= h($activityLogs->deleted) ?></td>
                            <td><?= h($activityLogs->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ActivityLogs', 'action' => 'view', $activityLogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ActivityLogs', 'action' => 'edit', $activityLogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ActivityLogs', 'action' => 'delete', $activityLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityLogs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Accounts') ?></h4>
                <?php if (!empty($employee->employee_accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Last Login') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_accounts as $employeeAccounts) : ?>
                        <tr>
                            <td><?= h($employeeAccounts->id) ?></td>
                            <td><?= h($employeeAccounts->employee_id) ?></td>
                            <td><?= h($employeeAccounts->password) ?></td>
                            <td><?= h($employeeAccounts->last_login) ?></td>
                            <td><?= h($employeeAccounts->created) ?></td>
                            <td><?= h($employeeAccounts->modified) ?></td>
                            <td><?= h($employeeAccounts->deleted) ?></td>
                            <td><?= h($employeeAccounts->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeAccounts', 'action' => 'view', $employeeAccounts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeAccounts', 'action' => 'edit', $employeeAccounts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeAccounts', 'action' => 'delete', $employeeAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeAccounts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Educations') ?></h4>
                <?php if (!empty($employee->employee_educations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Level Id') ?></th>
                            <th><?= __('School Name') ?></th>
                            <th><?= __('Course Name') ?></th>
                            <th><?= __('Date From') ?></th>
                            <th><?= __('Date To') ?></th>
                            <th><?= __('Highest Units Earned') ?></th>
                            <th><?= __('Year Graduated') ?></th>
                            <th><?= __('Honors Received') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_educations as $employeeEducations) : ?>
                        <tr>
                            <td><?= h($employeeEducations->id) ?></td>
                            <td><?= h($employeeEducations->employee_id) ?></td>
                            <td><?= h($employeeEducations->level_id) ?></td>
                            <td><?= h($employeeEducations->school_name) ?></td>
                            <td><?= h($employeeEducations->course_name) ?></td>
                            <td><?= h($employeeEducations->date_from) ?></td>
                            <td><?= h($employeeEducations->date_to) ?></td>
                            <td><?= h($employeeEducations->highest_units_earned) ?></td>
                            <td><?= h($employeeEducations->year_graduated) ?></td>
                            <td><?= h($employeeEducations->honors_received) ?></td>
                            <td><?= h($employeeEducations->created) ?></td>
                            <td><?= h($employeeEducations->modified) ?></td>
                            <td><?= h($employeeEducations->deleted) ?></td>
                            <td><?= h($employeeEducations->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeEducations', 'action' => 'view', $employeeEducations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeEducations', 'action' => 'edit', $employeeEducations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeEducations', 'action' => 'delete', $employeeEducations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEducations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Employee Employments') ?></h4>
                <?php if (!empty($employee->employee_employments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Hired Date') ?></th>
                            <th><?= __('Probationary Date') ?></th>
                            <th><?= __('Regularization Date') ?></th>
                            <th><?= __('Resigned Date') ?></th>
                            <th><?= __('Terminated Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->employee_employments as $employeeEmployments) : ?>
                        <tr>
                            <td><?= h($employeeEmployments->id) ?></td>
                            <td><?= h($employeeEmployments->employee_id) ?></td>
                            <td><?= h($employeeEmployments->hired_date) ?></td>
                            <td><?= h($employeeEmployments->probationary_date) ?></td>
                            <td><?= h($employeeEmployments->regularization_date) ?></td>
                            <td><?= h($employeeEmployments->resigned_date) ?></td>
                            <td><?= h($employeeEmployments->terminated_date) ?></td>
                            <td><?= h($employeeEmployments->created) ?></td>
                            <td><?= h($employeeEmployments->modified) ?></td>
                            <td><?= h($employeeEmployments->deleted) ?></td>
                            <td><?= h($employeeEmployments->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EmployeeEmployments', 'action' => 'view', $employeeEmployments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeEmployments', 'action' => 'edit', $employeeEmployments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeEmployments', 'action' => 'delete', $employeeEmployments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEmployments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Leave Balances') ?></h4>
                <?php if (!empty($employee->leave_balances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Term Id') ?></th>
                            <th><?= __('Balance') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->leave_balances as $leaveBalances) : ?>
                        <tr>
                            <td><?= h($leaveBalances->id) ?></td>
                            <td><?= h($leaveBalances->employee_id) ?></td>
                            <td><?= h($leaveBalances->term_id) ?></td>
                            <td><?= h($leaveBalances->balance) ?></td>
                            <td><?= h($leaveBalances->created) ?></td>
                            <td><?= h($leaveBalances->modified) ?></td>
                            <td><?= h($leaveBalances->deleted) ?></td>
                            <td><?= h($leaveBalances->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LeaveBalances', 'action' => 'view', $leaveBalances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LeaveBalances', 'action' => 'edit', $leaveBalances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LeaveBalances', 'action' => 'delete', $leaveBalances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaveBalances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Leaves') ?></h4>
                <?php if (!empty($employee->leaves)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Leave Type Id') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Commutation') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Is Approved By Employee Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->leaves as $leaves) : ?>
                        <tr>
                            <td><?= h($leaves->id) ?></td>
                            <td><?= h($leaves->employee_id) ?></td>
                            <td><?= h($leaves->leave_type_id) ?></td>
                            <td><?= h($leaves->reason) ?></td>
                            <td><?= h($leaves->start_date) ?></td>
                            <td><?= h($leaves->end_date) ?></td>
                            <td><?= h($leaves->commutation) ?></td>
                            <td><?= h($leaves->status) ?></td>
                            <td><?= h($leaves->is_approved_by_employee_id) ?></td>
                            <td><?= h($leaves->created) ?></td>
                            <td><?= h($leaves->modified) ?></td>
                            <td><?= h($leaves->deleted) ?></td>
                            <td><?= h($leaves->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leaves->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leaves->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leaves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaves->id)]) ?>
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
