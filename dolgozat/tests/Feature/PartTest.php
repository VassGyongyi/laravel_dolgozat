<?php

namespace Tests\Feature;

use App\Models\Part;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PartTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get(): void
    {
        $response = $this->get('/api/parts');

        $response->assertStatus(200);
    }
    public function test_post(): void
    {
        $response = $this->post('/api/parts', ['name'=>'teszttestápoló']);

        $response->assertStatus(200);
    }
    public function test_put(): void
    {
       
        $response = $this->put('/api/parts/8' ,['name'=>'putteszttestápoló']);

        $response->assertStatus(200);
    }
    public function test_delete(): void
    {
       
        $response = $this->delete('/api/parts/1');

        $response->assertStatus(200);
    }
}
