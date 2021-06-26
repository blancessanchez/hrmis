<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivityLogsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivityLogsTable Test Case
 */
class ActivityLogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivityLogsTable
     */
    protected $ActivityLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ActivityLogs',
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
        $config = $this->getTableLocator()->exists('ActivityLogs') ? [] : ['className' => ActivityLogsTable::class];
        $this->ActivityLogs = $this->getTableLocator()->get('ActivityLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ActivityLogs);

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
