<?php

namespace Botble\Ads\Tests\Feature;

use Botble\Ads\Models\Ads;
use Botble\Base\Enums\BaseStatusEnum;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdsApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Create test ads
        Ads::factory()->create([
            'name' => 'Test Ad 1',
            'key' => 'test-ad-1',
            'status' => BaseStatusEnum::PUBLISHED,
            'expired_at' => Carbon::now()->addDays(10),
            'image' => 'test-image-1.jpg',
            'url' => 'https://example.com/1',
            'order' => 1,
        ]);

        Ads::factory()->create([
            'name' => 'Test Ad 2',
            'key' => 'test-ad-2',
            'status' => BaseStatusEnum::PUBLISHED,
            'expired_at' => Carbon::now()->addDays(10),
            'image' => 'test-image-2.jpg',
            'url' => 'https://example.com/2',
            'order' => 2,
        ]);

        // Create an expired ad
        Ads::factory()->create([
            'name' => 'Expired Ad',
            'key' => 'expired-ad',
            'status' => BaseStatusEnum::PUBLISHED,
            'expired_at' => Carbon::now()->subDays(1),
            'image' => 'expired-image.jpg',
            'url' => 'https://example.com/expired',
            'order' => 3,
        ]);

        // Create a draft ad
        Ads::factory()->create([
            'name' => 'Draft Ad',
            'key' => 'draft-ad',
            'status' => BaseStatusEnum::DRAFT,
            'expired_at' => Carbon::now()->addDays(10),
            'image' => 'draft-image.jpg',
            'url' => 'https://example.com/draft',
            'order' => 4,
        ]);
    }

    public function test_get_all_ads_api(): void
    {
        $response = $this->getJson('/api/v1/ads');

        $response->assertStatus(200);
        $response->assertJsonCount(2, 'data');
        $response->assertJsonPath('data.0.key', 'test-ad-1');
        $response->assertJsonPath('data.1.key', 'test-ad-2');
    }

    public function test_get_ads_by_keys_with_get_request(): void
    {
        $response = $this->getJson('/api/v1/ads?keys[]=test-ad-1');

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.key', 'test-ad-1');
    }

    public function test_get_ads_by_keys_with_post_request(): void
    {
        $response = $this->postJson('/api/v1/ads', [
            'keys' => ['test-ad-1', 'test-ad-2', 'expired-ad', 'draft-ad'],
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(2, 'data');
        $response->assertJsonPath('data.0.key', 'test-ad-1');
        $response->assertJsonPath('data.1.key', 'test-ad-2');
    }

    public function test_get_ads_by_keys_validation(): void
    {
        $response = $this->postJson('/api/v1/ads', [
            'keys' => 'not-an-array',
        ]);

        $response->assertStatus(422);
    }
}
