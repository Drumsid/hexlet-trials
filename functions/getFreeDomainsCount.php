<?php

// Реализуйте функцию getFreeDomainsCount, которая принимает на вход список емейлов, 
// а возвращает количество емейлов, расположенных на каждом бесплатном домене. 
// Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.

// const FREE_EMAIL_DOMAINS = [
//     'gmail.com', 'yandex.ru', 'hotmail.com'
// ];

// $emails = [
//     'info@gmail.com',
//     'info@yandex.ru',
//     'info@hotmail.com',
//     'mk@host.com',
//     'support@hexlet.io',
//     'key@yandex.ru',
//     'sergey@gmail.com',
//     'vovan@gmail.com',
//     'vovan@hotmail.com'
// ];

// getFreeDomainsCount($emails);
# => Array (
#     'gmail.com' => 3
#     'yandex.ru' => 2
#     'hotmail.com' => 2
#  )


//=======================================MY SOLUTION =================================================

// BEGIN (write your solution here)
function getFreeDomainsCount($emails){

    $dellDogMaill = array_map(function($email){
        return explode('@', $email);
    }, $emails);   
    
    $sortdomen = array_reduce($dellDogMaill, function($acc, $domen){
        $acc[] = $domen[1];
        return $acc;
    }, []);    

    $countDomain = array_reduce($sortdomen, function($acc, $domain){
        if(in_array($domain, FREE_EMAIL_DOMAINS)){
            $acc[] = $domain;
        }
        return $acc;
    }, []);    

    array_flip($countDomain);

    $rightDomianCount = array_reduce($countDomain, function($acc, $domain){
        if(!array_key_exists($domain, $acc)){
            $acc[$domain] = 1;
        } else {
            $acc[$domain] += 1;
        }
        return $acc;
    }, []);

    return $rightDomianCount;
}
// END

//=======================================MY SOLUTION =================================================


//=======================================Teacher SOLUTION =============================================

// BEGIN
function getFreeDomainsCount(array $emails)
{
    $domains = array_map(function ($email) {
        return explode('@', $email)[1];
    }, $emails);

    $freeDomains = array_filter($domains, function ($domain) {
        return in_array($domain, FREE_EMAIL_DOMAINS);
    });


    return array_reduce($freeDomains, function ($acc, $domain) {
        if (!array_key_exists($domain, $acc)) {
            $acc[$domain] = 1;
        } else {
            $acc[$domain] += 1;
        }

        return $acc;
    }, []);
}
// END

//=======================================Teacher SOLUTION =============================================