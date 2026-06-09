<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('user can register', function () {
    $response = $this->postJson('/api/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertStatus(201)
             ->assertJsonStructure([
                 'message',
                 'user' => ['id', 'name', 'email'],
                 'token'
             ]);
});

test('user can login', function () {
    $user = User::factory()->create([
        'password' => bcrypt('password')
    ]);

    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertStatus(200)
             ->assertJsonStructure([
                 'message',
                 'user' => ['id', 'name', 'email'],
                 'token'
             ]);
});

test('user can logout', function () {
    $user = User::factory()->create();
    $token = $user->createToken('test')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                     ->postJson('/api/logout');

    $response->assertStatus(200)
             ->assertJson(['message' => 'Logged out successfully']);
});

test('unauthenticated user cannot logout', function () {
    $response = $this->postJson('/api/logout');

    $response->assertStatus(401);
});