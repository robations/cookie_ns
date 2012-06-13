<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CookieHelper
 *
 * @author Rob-C
 */
class CookieNonsenseHelper
{
    static function setCookie($name = 'cookie_use_agreed', $value = 1, $expire = null, $path = null, $domain = null)
    {
        $expire = $expire === null ? time() + 3600 * 24 * 365 : $expire;
        $path = $path === null ? '/' : $path;
        
        setcookie($name, $value, $expire, $path, $domain);
    }

    /**
     * Make a HTTP redirect and exit
     *
     * @param string $url Either full path or relative
     * @param int $responseCode HTTP redirect type, 301 permanent or 302 temporary (default)
     * @return void
     */
    static function redirect($url, $responseCode = 302)
    {
        $url = self::getAbsoluteUri($url);
        header('Location: ' . $url, false, $responseCode);
        exit();
    }


    /**
     * Takes a URI and converts it to absolute if it is not already absolute.
     *
     * @param string $uri A uri
     * @return string An absolute uri
     */
    static function getAbsoluteUri($uri)
    {
        // already absolute?
        if ('http' === substr($uri, 0, 4)) {
            return $uri;
        }

        $currentUri = sprintf('http%s://%s/',
            isset($_SERVER['HTTPS']) ? 's' : '',
            isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'
        );

        // anchor?
        if (!$uri || '#' == $uri[0]) {
            return preg_replace('/#.*?$/', '', $currentUri).$uri;
        }

        if ('/' !== $uri[0]) {
            $path = parse_url($currentUri, PHP_URL_PATH);

            if ('/' !== substr($path, -1)) {
                $path = substr($path, 0, strrpos($path, '/') + 1);
            }

            $uri = $path.$uri;
        }

        return preg_replace('#^(.*?//[^/]+)\/.*$#', '$1', $currentUri).$uri;
    }
}
