<?php

namespace model;

use function PHPSTORM_META\type;

class cUrl
{

    private static $status;
    private static $checked;
    private static $primary_ip;

    private static $response = [
        100 => 'Continue',
        101 => 'Switching Protocol',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Multi-Status',
        226 => 'IM Used',
        300 => 'Multiple Choice',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'unused',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        421 => 'Misdirected Request',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        451 => 'Unavailable For Legal Reasons',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended',
        511 => 'Network Authentication Required'

    ];

    public function cheackDomain($url)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://' . $url . '/');
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_KEEP_SENDING_ON_ERROR, TRUE);

        $head = curl_exec($ch);

        if ($head != false) {
            self::$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            self::$status = strval(self::$status) . ' ' . self::$response[self::$status];
            self::$primary_ip = curl_getinfo($ch, CURLINFO_PRIMARY_IP);
            self::$checked = date('h:i:s');
        } else {

            self::$status = "";
            self::$primary_ip = '';
            self::$checked = "";
        }



        curl_close($ch);
    }

    public function getStatus()
    {
        return self::$status;
    }

    public function getIp()
    {
        return self::$primary_ip;
    }

    public function getChecked()
    {
        return self::$checked;
    }
}
