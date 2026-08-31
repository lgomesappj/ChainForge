<?php
/**
 * Tests for ChainForge
 */

use PHPUnit\Framework\TestCase;
use Chainforge\Chainforge;

class ChainforgeTest extends TestCase {
    private Chainforge $instance;

    protected function setUp(): void {
        $this->instance = new Chainforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
