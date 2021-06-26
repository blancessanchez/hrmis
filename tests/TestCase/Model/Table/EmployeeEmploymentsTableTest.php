<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeEmploymentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeEmploymentsTable Test Case
 */
class EmployeeEmploymentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeEmploymentsTable
     */
    protected $EmployeeEmployments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EmployeeEmployments',
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
        $config = $this->getTableLocator()->exists('EmployeeEmployments') ? [] : ['className' => EmployeeEmploymentsTable::class];
        $this->EmployeeEmployments = $this->getTableLocator()->get('EmployeeEmployments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmployeeEmployments);

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
