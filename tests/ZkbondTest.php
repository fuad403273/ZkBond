<?php
/**
 * Tests for ZkBond
 */

use PHPUnit\Framework\TestCase;
use Zkbond\Zkbond;

class ZkbondTest extends TestCase {
    private Zkbond $instance;

    protected function setUp(): void {
        $this->instance = new Zkbond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zkbond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
