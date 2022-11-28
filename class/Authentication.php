<?php

require_once 'User.php';

class Authentication
{
    public function log_in(string $user, string $password) : ?string
    {
        $dataUser = (new User()) -> users($user);
        
        if ($dataUser) {
            if ($password === $dataUser->getPassword()) {
                $dataLogin['username'] = $dataUser->getUsername();
                $dataLogin['id'] = $dataUser -> getId();
                $dataLogin['rol'] = $dataUser -> getRole();
                $_SESSION['loggedIn'] = $dataLogin;
                
                return $dataLogin['rol'];
            } else {
                echo "La contraseña ingresada es incorrecta.";
                return NULL;
            }
        } else{
            echo "El usuario ingresado no se encontró en nuestra base de datos.";
            return NULL;
        }
    }

    public function log_out()
    {
        if (isset($_SESSION['loggedIn'])) {
            unset($_SESSION['loggedIn']);
        };
    }
}