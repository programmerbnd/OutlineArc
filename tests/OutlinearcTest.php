<?php
/**
 * Tests for OutlineArc
 */

use PHPUnit\Framework\TestCase;
use Outlinearc\Outlinearc;

class OutlinearcTest extends TestCase {
    private Outlinearc $instance;

    protected function setUp(): void {
        $this->instance = new Outlinearc(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinearc::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
