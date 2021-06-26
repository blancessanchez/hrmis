<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeEducationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeEducationsTable Test Case
 */
class EmployeeEducationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeEducationsTable
     */
    protected $EmployeeEducations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EmployeeEducations',
        'app.Employees',
        'app.Levels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmployeeEducations') ? [] : ['className' => EmployeeEducationsTable::class];
        $this->EmployeeEducations = $this->getTableLocator()->get('EmployeeEducations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmployeeEducations);

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
