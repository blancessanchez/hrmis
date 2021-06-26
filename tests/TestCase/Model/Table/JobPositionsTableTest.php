<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobPositionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobPositionsTable Test Case
 */
class JobPositionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobPositionsTable
     */
    protected $JobPositions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JobPositions',
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
        $config = $this->getTableLocator()->exists('JobPositions') ? [] : ['className' => JobPositionsTable::class];
        $this->JobPositions = $this->getTableLocator()->get('JobPositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JobPositions);

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
}
