<?php

namespace Botble\Ecommerce\Tests\Feature;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Ecommerce\Models\FlashSale;
use Botble\Ecommerce\Models\Product;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FlashSaleApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Create test products
        $product1 = Product::factory()->create([
            'name' => 'Test Product 1',
            'price' => 100,
            'status' => BaseStatusEnum::PUBLISHED,
        ]);

        $product2 = Product::factory()->create([
            'name' => 'Test Product 2',
            'price' => 200,
            'status' => BaseStatusEnum::PUBLISHED,
        ]);

        // Create test flash sales
        $flashSale1 = FlashSale::create([
            'name' => 'Winter Sale',
            'end_date' => Carbon::now()->addDays(10),
            'status' => BaseStatusEnum::PUBLISHED,
        ]);

        $flashSale1->products()->attach($product1->id, [
            'price' => 80,
            'quantity' => 10,
            'sold' => 2,
        ]);

        $flashSale2 = FlashSale::create([
            'name' => 'Summer Sale',
            'end_date' => Carbon::now()->addDays(20),
            'status' => BaseStatusEnum::PUBLISHED,
        ]);

        $flashSale2->products()->attach($product2->id, [
            'price' => 150,
            'quantity' => 20,
            'sold' => 5,
        ]);

        // Create an expired flash sale
        $expiredFlashSale = FlashSale::create([
            'name' => 'Expired Sale',
            'end_date' => Carbon::now()->subDays(1),
            'status' => BaseStatusEnum::PUBLISHED,
        ]);

        // Create a draft flash sale
        $draftFlashSale = FlashSale::create([
            'name' => 'Draft Sale',
            'end_date' => Carbon::now()->addDays(10),
            'status' => BaseStatusEnum::DRAFT,
        ]);
    }

    public function test_get_all_flash_sales_api(): void
    {
        $response = $this->getJson('/api/v1/ecommerce/flash-sales');

        $response->assertStatus(200);
        $response->assertJsonCount(2, 'data');
        $response->assertJsonPath('data.0.name', 'Winter Sale');
        $response->assertJsonPath('data.1.name', 'Summer Sale');
        $response->assertJsonPath('data.0.products.0.price', 80);
        $response->assertJsonPath('data.0.products.0.original_price', 100);
        $response->assertJsonPath('data.0.products.0.sale_count_left', 8);
    }

    public function test_get_flash_sales_by_ids_with_get_request(): void
    {
        $flashSale = FlashSale::where('name', 'Winter Sale')->first();
        
        $response = $this->getJson('/api/v1/ecommerce/flash-sales?keys[]=' . $flashSale->id);

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.name', 'Winter Sale');
    }

    public function test_get_flash_sales_by_ids_with_post_request(): void
    {
        $flashSale1 = FlashSale::where('name', 'Winter Sale')->first();
        $flashSale2 = FlashSale::where('name', 'Summer Sale')->first();
        $expiredFlashSale = FlashSale::where('name', 'Expired Sale')->first();
        $draftFlashSale = FlashSale::where('name', 'Draft Sale')->first();
        
        $response = $this->postJson('/api/v1/ecommerce/flash-sales', [
            'keys' => [$flashSale1->id, $flashSale2->id, $expiredFlashSale->id, $draftFlashSale->id],
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(2, 'data');
        $response->assertJsonPath('data.0.name', 'Winter Sale');
        $response->assertJsonPath('data.1.name', 'Summer Sale');
    }

    public function test_get_flash_sales_by_ids_validation(): void
    {
        $response = $this->postJson('/api/v1/ecommerce/flash-sales', [
            'keys' => 'not-an-array',
        ]);

        $response->assertStatus(422);
    }
}
