<?php

// panggil dulu file nya

// file User.php yang ada di folder APP 
include __DIR__.'/APP/USER.php';

// file User.php yang ada di folder Models 
include __DIR__.'/APP/Models/USER.php';

// import class yang akan digunakan 
use APP\User;
use APP\Models\User as UserModel;

var_dump(User::getData());
echo"<br>";
print_r(UserModel::getData());

?>