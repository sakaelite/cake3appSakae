<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialSuppliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialSuppliersTable Test Case
 */
class MaterialSuppliersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialSuppliersTable
     */
    public $MaterialSuppliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.material_suppliers',
        'app.materials',
        'app.products',
        'app.customers',
        'app.katakouzous',
        'app.kensahyou_heads',
        'app.konpous',
        'app.label_insideouts',
        'app.label_type_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialSuppliers') ? [] : ['className' => MaterialSuppliersTable::class];
        $this->MaterialSuppliers = TableRegistry::get('MaterialSuppliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialSuppliers);

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
