<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

it('displays the index page', function (User $user) {
    $response = $this
        ->actingAs($user)
        ->get('/shortlinks');

    $response->assertOk();
})->with('user');

it('displays the create page', function (User $user) {
    $response = $this
        ->actingAs($user)
        ->get('/shortlinks/create');

    $response->assertOk();
})->with('user');

it('displays the edit page', function (User $user, Collection $shortlinks) {
    $response = $this
        ->actingAs($user)
        ->get('/shortlinks/' . $shortlinks->first()->id . '/edit');

    $response->assertOk();
})->with('user', 'shortlinks');
