<?php

function getRootUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    // $rootUrl = $protocol . $domainName . dirname($_SERVER['SCRIPT_NAME']);
    $rootUrl = $protocol . $domainName;

    return rtrim($rootUrl, '/').'/';
}


    $root_url = getRootUrl();
?>


