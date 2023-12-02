<?php
// @ Show Error Production
$production = 1;
switch ($production) {
    case 1:
        // Report all PHP errors
        error_reporting(-1);
        error_reporting(E_ALL & ~E_NOTICE);
        // Report simple running errors
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        // Reporting E_NOTICE can be good too (to report uninitialized
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        // Report all errors except E_NOTICE
        error_reporting(E_ALL & ~E_NOTICE);
        // Report all PHP errors (see changelog)
        error_reporting(E_ALL);
        break;
    case 0:
        error_reporting(0);
        break;
}
include_once(dirname(__FILE__) . '/database.php');

function base_url($uri = '', $protocol = NULL)
{
    $potocal = 'http';
    $directory = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $base_url = $potocal . 's' . '://' . $_SERVER['HTTP_HOST'];
    } else {
        $base_url = $potocal . '://' . $_SERVER['HTTP_HOST'] . '/' . explode('/', $_SERVER['REQUEST_URI'])[1];
    };

    return  $base_url . '/' . $uri;
}
function renderClass($classname)
{
    $function = explode('/', $_SERVER['REQUEST_URI']);
    $page = !empty($function[5]) ? $function[5] : 'index';
    $app = $classname;
    $app->load($page);
}

class CURD_controller extends Core_DB
{
    public $data;
    public $another_js;
    public $another_css;
    public function __construct()
    {
        parent::__construct();

        $this->data['base_url'] = base_url();
    }
    protected function loadmodel($pathmodeal, $replacename = '')
    {
        include_once(dirname(__DIR__) . $pathmodeal . '.php');
        if ($replacename == '') {
            $length = count(explode('/', $pathmodeal));
            $name = explode('/', $pathmodeal)[$length - 1];
        } else {
            $name = $replacename;
        }
        return  $name;
    }
    protected function getRes($status, $data = '', $code = '')
    {
        $response['status'] = $status ? $status : null;
        $response['data'] = $data ? $data : null;
        $response['code'] = $code ? $code : null;

        echo json_encode($response);
    }

    protected function setRes($status, $data, $code, $option = '')
    {
        $this->response['status'] = $status ? $status : false;
        $this->response['data'] = $data ? $data : null;
        $this->response['code'] = $code ? $code : null;

        if ($option) {
            $this->response['options'] = $option;
        }

        throw new Exception();
    }

    protected function setErr($code, $message = '')
    {
        $this->response['status'] = false;
        $this->response['message'] = $message ? $message : self::errorCode($code);
        $this->response['code'] = $code;
        throw new Exception();
    }

    protected function response($method)
    {
        echo json_encode($this->response);
    }
    private function errorCode($code): string
    {
        switch ($code) {
            case 400:
                return 'BAD REQUEST';
            case 401:
                return 'NO AUTHENRIZATION';
            case 402:
                return 'INPUT ERROR';
            case 404;
                return 'NOT FOUND';
            default:
                return 'ERROR';
        }
    }
    protected function setBread(...$list)
    {
        $this->breadcrumb_data['breadcrumb'] = $list;
    }

    protected function setJs($path)
    {
        $this->another_js .= '<script src="' . base_url($path) . '"></script>' . "\n\t";
    }
    protected function setCss($path)
    {
        $this->another_css .= '<link rel="stylesheet" href="' . base_url($path) . '">' . "\n\t";
    }
    protected function renderview($path, $template = 'master.php')
    {
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
        $this->data['content'] =   dirname(__DIR__) . $path;
        $this->data['left_sidebar'] =   dirname(__DIR__) . "/view/template/left_sidebar_view.php";
        $this->data['breadcrumb_list'] =   dirname(__DIR__) . "/view/template/breadcrumb_view.php";
        $this->data['top_navbar'] =   dirname(__DIR__) . "/view/template/top_navbar_view.php";
        include dirname(__DIR__) . '/view/template/' . $template;
    }
}
