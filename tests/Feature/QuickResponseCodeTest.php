<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

it('displays the index page', function (User $user) {
    $response = $this
        ->actingAs($user)
        ->get('/quick-response-codes');

    $response->assertOk();
})->with('user');

it('displays the create page', function (User $user) {
    $response = $this
        ->actingAs($user)
        ->get('/quick-response-codes/create');

    $response->assertOk();
})->with('user');

it('displays the edit page', function (User $user, Collection $quickResponseCodes) {
    $response = $this
        ->actingAs($user)
        ->get('/quick-response-codes/' . $quickResponseCodes->first()->id . '/edit');

    $response->assertOk();
})->with('user', 'quick-response-codes');
