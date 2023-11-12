<?php

use Database\Factories\UserFactory;

dataset('user', [
    fn () => UserFactory::new()->create([
        'name' => 'Admin',
        'email' => 'admin@praxand.com',
    ]),
]);
