<?php

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('get all cars', function () {
    Car::factory()->count(3)->create();
    
    $response = $this->get('/api/car');
    
    $response->assertSuccessful()
        ->assertJsonStructure([
            'success',
            'data',
            'total'
        ]);
});

test('get all cars using plural resource name', function () {
    Car::factory()->count(2)->create();
    
    $response = $this->get('/api/cars');
    
    $response->assertSuccessful()
        ->assertJsonStructure([
            'success',
            'data',
            'total'
        ]);
});

test('get single car', function () {
    $car = Car::factory()->create();

    $response = $this->get("/api/car/{$car->id}");
    
    $response->assertSuccessful()
        ->assertJsonStructure([
            'success',
            'data'
        ]);
});

test('get single car by rfid using shorthand route', function () {
    $car = Car::factory()->create([
        'codeRFID' => 'RFID-123',
    ]);

    $response = $this->get('/api/car/RFID-123');

    $response->assertSuccessful()
        ->assertJsonPath('data.id', $car->id);
});

test('create car', function () {
    $response = $this->post('/api/car', [
        'name' => 'Test Car',
        'maxV' => 200
    ]);
    
    $response->assertCreated()
        ->assertJsonStructure([
            'success',
            'message',
            'data'
        ]);
});

test('update car', function () {
    $car = Car::factory()->create();

    $response = $this->put("/api/car/{$car->id}", [
        'name' => 'Updated Car',
        'maxV' => 250
    ]);
    
    $response->assertSuccessful();
});

test('delete car', function () {
    $car = Car::factory()->create();

    $response = $this->delete("/api/car/{$car->id}");
    
    $response->assertSuccessful();
});

test('resource not found', function () {
    $response = $this->get('/api/nonexistent');
    
    $response->assertStatus(404);
});
