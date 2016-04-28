<?php
namespace Models;


class Users extends Model
{
    protected $table = 'connect';

    public function check($credentials)
    {
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([
                ':email' => $credentials['email'],
                ':password' => $credentials['password'],
        ]);

        }
}