<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeAccountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeAccountsTable Test Case
 */
class EmployeeAccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeAccountsTable
     */
    protected $EmployeeAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EmployeeAccounts',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmployeeAccounts') ? [] : ['className' => EmployeeAccountsTable::class];
        $this->EmployeeAccounts = $this->getTableLocator()->get('EmployeeAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmployeeAccounts);

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
