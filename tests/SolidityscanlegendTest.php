<?php
/**
 * Tests for SolidityScanLegend
 */

use PHPUnit\Framework\TestCase;
use Solidityscanlegend\Solidityscanlegend;

class SolidityscanlegendTest extends TestCase {
    private Solidityscanlegend $instance;

    protected function setUp(): void {
        $this->instance = new Solidityscanlegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityscanlegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
