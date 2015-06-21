<?php

require_once 'app/config/parameters.php';

require_once 'app/config/routing.php';

require_once 'app/AppContainer.php';

require_once 'src/User/Model/User.php';

require_once 'app/ressources/views/layout.php';


if(isset($error))
    var_dump($error);
