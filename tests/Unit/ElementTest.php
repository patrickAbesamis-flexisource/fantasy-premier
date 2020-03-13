<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ElementController;
use App\Repositories\ElementRepository;
use App\Element;

class ElementTest extends TestCase
{
    protected $elementController;

    protected $elementRepository;

    protected $element;

    protected $modelElement;

    protected function setUp(): void
    {
        parent::setUp();
        $this->element = new Element();
        $this->elementRepository = new ElementRepository($this->element);
        $this->elementController = new ElementController($this->elementRepository);
        $this->modelElement = $this->elementController->index()
            ->random(1);
    }

    /**
     * Test getAllElements endpoint.
     *
     * @return void
     */
    public function testAllElementsHasResponse()
    {
        $result = $this->element->all();
        $this->assertTrue($result);
    }

    /**
     * Test getAllElements endpoint.
     *
     * @return void
     */
    public function testGetElementHasResponse()
    {
        $result = $this->element->find(1);
        $this->assertIsObject($result);
    }
}
