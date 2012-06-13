<?php

require_once(dirname(__FILE__) . '/CookieNonsenseHelper.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // set cookie for domain
    CookieNonsenseHelper::setCookie();

    // return to referring page, if given and within domain
    $referrer = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
    CookieNonsenseHelper::redirect($referrer);
}

