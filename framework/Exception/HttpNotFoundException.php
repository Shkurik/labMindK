<?php
/**
 * Created by PhpStorm.
 * User: Sanya
 * Date: 19.03.2016
 * Time: 21:55
 */

namespace Framework\Exception;


/**
 * Class serves for throwing exception in case "404"
 *
 * Class HttpNotFoundException
 * @package Framework\Exception
 */
class HttpNotFoundException extends \Exception {
    public function getParams( ) {
        $params = [ 'message' => $this->getMessage(), 'code' => '404'];
        return $params;
    }
}