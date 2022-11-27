<?php

require_once 'User.php';

class Authentication
{
    public function log_in(string $user, string $password) : ?string
    {
        $dataUser = (new User()) -> users($user);

        if ($dataUser) {
            if (password_valid($password, $dataUser -> $getPassword())) {
                $dataLogin['username'] = dataUser -> getUsername();
                $dataLogin['id'] = $dataUser -> getId();
                $dataLogin['rol'] = $dataUser -> getRole();
                $_SESSION['loggedIn'] = $dataLogin;
                return $dataLogin['rol'];
            } else {
                (new Alerta())->add_alerta('danger', "La contraseña ingresada es incorrecta.");
                return NULL;
            }
        } else{
            (new Alerta())->add_alerta('warning', "El usuario ingresado no se encontró en nuestra base de datos.");
            return NULL;
        }
    }
}