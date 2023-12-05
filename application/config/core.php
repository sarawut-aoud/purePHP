<?php
// @ Show Error Production

if (isset($_SERVER['CI_ENV'])) {
    define('ENVIRONMENT', $_SERVER['CI_ENV']);
} else {
    if (!in_array($_SERVER['SERVER_NAME'], ['host::server'])) {
        define('ENVIRONMENT', 'production');
    } else {
        define('ENVIRONMENT', 'development');
    }
}

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 1);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        } else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}

include_once(dirname(__FILE__) . '/database.php');

function base_url($uri = '', $protocol = NULL)
{
    $ssl = '';
    $hostSSL = ['ngrok-free'];
    if (in_array(explode('.', $_SERVER['HTTP_HOST'])[1],  $hostSSL)) {
        $ssl = 's';
    }
    $potocal = 'http';
    $directory = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $base_url = $potocal . 's' . '://' . $_SERVER['HTTP_HOST'];
    } else {
        $base_url = $potocal .  $ssl . '://' . $_SERVER['HTTP_HOST'] . '/' . explode('/', $_SERVER['REQUEST_URI'])[1];
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
function my_simple_crypt($string, $action = 'e')
{
    // you may change these values to your own
    $secret_key = 'my@pos#secret-key234';
    $secret_iv = 'my@pos#secret-iv345';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'e') {
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    } else if ($action == 'd') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

function encrypt($string)
{
    $salting = substr(md5(microtime()), -1) . $string;
    return my_simple_crypt($salting, 'e');
}

function decrypt($string)
{
    $encode = my_simple_crypt($string, 'd');
    return substr($encode, 1);
}

function ci_encrypt($string)
{
    return my_simple_crypt($string, 'e');
}

function ci_decrypt($string)
{
    return my_simple_crypt($string, 'd');
}

function checkEncryptData($value)
{
    $check_id = decrypt($value); //ถ้าถอดรหัสมาก่อนแล้ว จะกลายเป็นค่าว่าง
    if ($check_id != '') {
        $value = $check_id;         //ถ้าไม่เป็นค่าว่าง แสดงว่าก่อนหน้านี้ยังเข้ารหัสอยู่ ให้ใช้ค่าที่ถอดรหัสแล้ว
    }
    return $value;
}

/**
 * Call md5() with salting
 * @param String $input_pass from user register
 * @return String a 32-character hexadecimal number
 */
function encrypt_md5_salt($input_pass)
{
    // 123456 ($2y$11$7E1Dw5fgB1FifW0apMj8meNHQG9janZMxtnaWPC4niyulskCov5sa)
    $key1 = 'RTy4$58/*tdr#t';    //default = RTy4$58/*tdr#t
    $key2 = 'ci@gen#$_sdf';        //default = ci@gen#$_sdf

    $key_md5 = md5($key1 . $input_pass . $key2);
    $key_md5 = md5($key2 . $key_md5 . $key1);
    $sub1 = substr($key_md5, 0, 7);
    $sub2 = substr($key_md5, 7, 10);
    $sub3 = substr($key_md5, 17, 12);
    $sub4 = substr($key_md5, 29, 3);
    return md5($sub3 . $sub1 . $sub4 . $sub2);
}

/**
 * Call password_hash() with md5 + salting
 * @param String $input_pass from user register
 * @return String always be a 60 character string
 */
function pass_secure_hash($input_pass)
{
    $encrypt_pass = encrypt_md5_salt($input_pass);
    $options = array('cost' => 11);
    return password_hash($encrypt_pass, PASSWORD_BCRYPT, $options);
}

/**
 * Call password_verify() with md5 + salting
 * @param String $input_pass from user Login
 * @param String $record_password from database user record
 * @return Boolean 
 */
function pass_secure_verify($input_pass, $record_password)
{
    $encrypt_pass = encrypt_md5_salt($input_pass);
    return password_verify($encrypt_pass, $record_password);
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
    public function uploadFile()
    {
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
