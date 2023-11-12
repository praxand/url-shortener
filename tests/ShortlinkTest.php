<?php

use Database\Factories\UserFactory;

test('shortlinks page is displayed', function () {
    $user = UserFactory::new()->create();

    $response = $this
        ->actingAs($user)
        ->get('/shortlinks');

    $response->assertOk();
});
