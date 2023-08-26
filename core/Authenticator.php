<?php

namespace Core;

use Core\Database;

class Authenticator
{
        public function attempt($email, $password)
        {
                // FETCH USER
                $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email',[
                        'email' => $email
                ])->find();

                if($user)
                {
                        if(password_verify($password, $user['password']))
                        {
                                $this->login([
                                        'email' => $email
                                ]);
                                return true;
                        }
                }

                return false;
        }

        protected function login($user)
        {
                $_SESSION['user'] = [
                        'email' => $user['email']
                ];
        
                session_regenerate_id(true);
        }
}