<?php

namespace Authentification\Controller;

class Authentification
{
    public function loginAction()
    {
        return array(
            'template' => 'login'
        );
    }
}