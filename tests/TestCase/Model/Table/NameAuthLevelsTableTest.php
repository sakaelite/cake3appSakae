<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NameAuthLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NameAuthLevelsTable Test Case
 */
class NameAuthLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NameAuthLevelsTable
     */
    public $NameAuthLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.name_auth_levels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NameAuthLevels') ? [] : ['className' => NameAuthLevelsTable::class];
        $this->NameAuthLevels = TableRegistry::get('NameAuthLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NameAuthLevels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
