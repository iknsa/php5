<?php

namespace User\Controller;

class User
{
    public function newAction()
    {
        $return = array(
            'template' => "index"
        );

        return $return;
    }
}