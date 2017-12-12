<?php

namespace webapp\service;

// script requirements 
require $_SERVER['DOCUMENT_ROOT']."/env_params/php_path_constants.php";
require $_SERVER['DOCUMENT_ROOT']."/env_params/global_functions.php";

/**
* TODO:perform all clean-ups:
* Log user logout time.
*/

//go back to the logout page
echoRedirect(INDEX_PAGE);

?>