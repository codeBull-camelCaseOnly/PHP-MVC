<?php
use Lib\database\Model;

class User extends Model{
    public string $name;
    public string $password;
    public string $email;
}
