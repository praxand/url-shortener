<?php

use Database\Factories\ShortlinkFactory;

dataset('shortlinks', [
    fn () => ShortlinkFactory::new()->count(10)->create([
        'user_id' => 1,
    ]),
]);