<?php

use Database\Factories\QuickResponseCodeFactory;

dataset('quick-response-codes', [
    fn () => QuickResponseCodeFactory::new()->count(10)->create([
        'user_id' => 1,
    ]),
]);
