<?php
class User{
    public $name;
    public $sername;
    public $role;
    public $login;
    public $password;
function __construct($array)
{
    $this->name = $array['name'];
    $this->sername = $array['sername'];
    $this->role = $array['role'];
}


}
class Admin extends User{
    public function A(){
        echo "Привет" .$this->name .$this->sername .", вы в роли " .$this->role;
    }
}

class Manager extends User{
    public function M(){
        echo "Привет " .$this->name .$this->sername .", вы в роли " .$this->role;
    }
}

class Client extends User{
    public function C(){
        echo "Привет " .$this->name .$this->sername .", вы в роли " .$this->role;
    }
}

$login = $_GET['Login'];
$password = $_GET['password'];

$array = [
    [
        'login' => '1234',
        'password' => '1111',
        'role' => 'Admin',
        'name' => ' Stepan',
        'sername' => ' Nedrya',
    ],
    [
        'login' => '12345',
        'password' => '12',
        'role' => 'Manager',
        'name' => 'Danya',
        'sername' => 'Kolomoyets',
    ],
    [
        'login' => '123456',
        'password' => '123',
        'role' => 'Client',
        'name' => 'Bogdan',
        'sername' => 'Novitskiy',
    ],
];

foreach($array as $value){
    if($login == $value['login'] && $password == $value['password']){
        if( $value['role'] =='Admin'){
            $a = new Admin($value);
            $a->A();
        }

        if( $value['role'] =='Manager'){
            $b = new Manager($value);
            $b->M();
        }

        if( $value['role'] =='Client'){
        $c = new Client($value);
        $c->C();
    }
    }
}

?>
