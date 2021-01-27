<?php
declare(strict_types=1);

include __DIR__ . '/../bootstrap.php';

use Enums\EGender;
use Enums\EMonth;
use Enums\ERole;
use Enums\User;

$users = [
    new User('sergiolibe', 'sergiolibe@gmail.com', ERole::ADMIN()),
    new User('francisber', 'francisber172@gmail.com'),
    new User('test', 'a@a.a', gender: EGender::FEMALE()),
    new User('foobar', 'myname@company.com'),
    ERole::ADMIN()->getName()=>[
        ERole::ADMIN()->getValue(),
        ERole::ADMIN()
    ],
    EGender::FEMALE()->getName()=>[
        EGender::FEMALE()->getValue(),
        EGender::FEMALE()
    ],
    EMonth::FEBRUARY()->getName()=>[
        EMonth::FEBRUARY()->getValue(),
        EMonth::FEBRUARY()
    ],
];

//foreach ($users as $user) {
//    echo $user
//        ." roleValue=" . $user->getRole()->getValue()
//        .PHP_EOL;
//}


ejd($users);

function dd($data): void
{
    var_dump($data);
    die();
}

function ejd($data): void
{
    header('Content-Type:application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}