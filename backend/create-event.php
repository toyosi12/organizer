<?php
require_once __DIR__ . '/../autoload.php';  

if(isset($_SESSION['user_id'])){
    
    print_r(Events::createEvent($_POST, $_FILES));

}else{
    echo '{
        "error": 401,
        "message": "Unauthorized"
    }';
}

