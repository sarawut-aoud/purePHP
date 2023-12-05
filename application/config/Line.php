<?php
include_once(dirname(__FILE__) . '/core.php');

class Linenoti_model extends CURD_controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function notify_message($message, $token, $picture = null)
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        $queryData = array(
            'message'          => $message,
        );
        if (!empty($picture)) {
            $queryData['imageThumbnail'] = $picture;
            $queryData['imageFullsize'] = $picture;
        }
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
                    . "Authorization: Bearer " . $token . "\r\n"
                    . "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData,
            ),
        );
        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
}
