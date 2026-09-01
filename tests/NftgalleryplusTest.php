<?php
/**
 * Tests for NFTGalleryPlus
 */

use PHPUnit\Framework\TestCase;
use Nftgalleryplus\Nftgalleryplus;

class NftgalleryplusTest extends TestCase {
    private Nftgalleryplus $instance;

    protected function setUp(): void {
        $this->instance = new Nftgalleryplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftgalleryplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
