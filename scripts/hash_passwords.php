<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Starting to hash plain text passwords in users1 table...\n";

$users = DB::table('users1')->get();

foreach ($users as $user) {
    // Check if password is already hashed (starts with $2y$)
    if (strpos($user->password, '$2y$') !== 0) {
        $hashed = Hash::make($user->password);
        DB::table('users1')->where('nim', $user->nim)->update(['password' => $hashed]);
        echo "Hashed password for user with nim: {$user->nim}\n";
    } else {
        echo "Password already hashed for user with nim: {$user->nim}\n";
    }
}

echo "Password hashing completed.\n";
