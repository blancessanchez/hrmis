<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesTable
     */
    protected $Employees;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Employees',
        'app.Roles',
        'app.Departments',
        'app.JobPositions',
        'app.ActivityLogs',
        'app.EmployeeAccounts',
        'app.EmployeeEducations',
        'app.EmployeeEmployments',
        'app.LeaveBalances',
        'app.Leaves',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Employees') ? [] : ['className' => EmployeesTable::class];
        $this->Employees = $this->getTableLocator()->get('Employees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Employees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
