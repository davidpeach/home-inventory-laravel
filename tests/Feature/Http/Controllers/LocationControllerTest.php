<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Location;
use Tests\TestCase;

class LocationControllerTest extends TestCase
{
    /** @test */
    public function locations_can_be_created_via_endpoint(): void
    {
        $this->post(uri: '/api/locations', data: [
            'name' => 'My New Location',
        ])->assertStatus(status: 201);

        $this->assertDatabaseHas(table: Location::class, data: [
            'name' => 'My New Location',
        ]);
    }
}
