<?php

/**
 * Response object for Simple Site
 * 
 * @author henry
 * @version 2012
 */

namespace Lovecom\System;

final class Response
{

    // data used by the view to generate a response
    private $data = array();
    private $dataRaw = array();
    // csrf token
    private $token = null;
    // whether the request is forbidden
    private $forbidden = false;
    // headers to be set by the view
    private $headers = array();
    // headers to be removed by the view
    private $removeHeaders = array();
    // url to redirect to (if any)
    private $redirect = null;
    // whether or not the response should be formatted for ajax consumption
    private $ajax = false;
    // whether the response is in https
    private $https = false;
    // whether the user agent is supported
    private $supportedBrowser = true;

    public function get($key = null)
    {
        if ($key === null) {
            return $this->data;
        }

        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        if (isset($this->dataRaw[$key])) {
            $this->data[$key] = \Lovecom\Mvc\MvcHelper::htmlEscapeData($this->dataRaw[$key]);
            return $this->data[$key];
        }

        return null;
    }

    public function getUnsafeRaw($key)
    {
        return isset($this->dataRaw[$key]) ? $this->dataRaw[$key] : null;
    }

    public function getUnsaleDataRaw()
    {
        return $this->dataRaw; 
    }

    public function set($key, $value)
    {
        $this->dataRaw[$key] = $value;
        if (isset($this->data[$key])) {
            // bust cache
            $this->data[$key] = null;
        }
    }

    public function isEmpty($key)
    {
        return empty($this->dataRaw[$key]);
    }

    public function isDataRawKeyExist($key)
    {
        return array_key_exists($key, $this->dataRaw);
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getRemoveHeaders()
    {
        return $this->removeHeaders;
    }

    public function addHeader($header)
    {
        array_push($this->headers, $header);
    }

    public function removeHeader($header)
    {
        array_push($this->removeHeaders, $header);
    }

    public function getRedirect()
    {
        return $this->redirect;
    }

    public function setRedirect($redirectUrl)
    {
        $this->redirect = $redirectUrl;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function isForbidden()
    {
        return $this->forbidden;
    }

    public function setForbidden($forbidden)
    {
        $this->forbidden = $forbidden;
    }

    public function isAjax()
    {
        return $this->ajax;
    }

    public function setAjax($ajax)
    {
        $this->ajax = $ajax;
    }

    public function isHttps()
    {
        return $this->https;
    }

    public function setHttps($https)
    {
        $this->https = $https;
    }

    public function isSupportedBrowser()
    {
        return $this->supportedBrowser;
    }

    public function setSupportedBrowser($supportedBrowser)
    {
        $this->supportedBrowser = $supportedBrowser;
    }

}
