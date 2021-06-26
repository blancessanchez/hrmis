<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeaveBalancesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeaveBalancesTable Test Case
 */
class LeaveBalancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LeaveBalancesTable
     */
    protected $LeaveBalances;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LeaveBalances',
        'app.Employees',
        'app.Terms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LeaveBalances') ? [] : ['className' => LeaveBalancesTable::class];
        $this->LeaveBalances = $this->getTableLocator()->get('LeaveBalances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LeaveBalances);

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
