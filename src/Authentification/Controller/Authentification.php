<?php

namespace Authentification\Controller;

class AuthentificationController
{
    public function loginAction()
    {
        return array(
            'template' => 'login'
        );
    }
}