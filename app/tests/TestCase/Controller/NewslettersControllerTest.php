<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\NewslettersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\NewslettersController Test Case
 *
 * @uses \App\Controller\NewslettersController
 */
class NewslettersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Newsletters',
    ];

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
