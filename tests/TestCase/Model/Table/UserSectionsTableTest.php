<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserSectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserSectionsTable Test Case
 */
class UserSectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserSectionsTable
     */
    public $UserSections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_sections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserSections') ? [] : ['className' => UserSectionsTable::class];
        $this->UserSections = TableRegistry::get('UserSections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserSections);

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
