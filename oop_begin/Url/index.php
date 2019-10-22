<?php

require_once 'Url.php';
// require_once 'Urlinterface.php';

$url = new Url('https://google.com?a=b&c=d&lala=value');
print_r($url);
print_r($url->getScheme());
print_r($url->getQueryParams());
print_r($url->getHost());
print_r($url->getQueryParam('key'));