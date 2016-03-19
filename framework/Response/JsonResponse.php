<?php
/**
 * Created by PhpStorm.
 * User: Sanya
 * Date: 19.03.2016
 * Time: 22:09
 */

namespace Framework\Response;


/**
 * Serves for JSON Responses
 *
 * Class JsonResponse
 * @package Framework\Response
 */
class JsonResponse extends Response {
    public $content;

    /**
     * Fills the content
     *
     * JsonResponse constructor.
     * @param string $array
     */
    function __construct($array) {
        $this->content = $array;
    }

    /**
     * Sets a header
     */
    private function getHeader(){
        $currentCode = $this->code;
        header('HTTP/1.1 ' . $currentCode . ' ' . self::$codeMessage[$currentCode]);
        header('Content-Type: application/json; charset=utf-8');
    }

    /**
     * Outputs a content/
     */
    private function getContent() {
        echo json_encode($this->content, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Sends a response
     */
    public function send(){
        $this->getHeader();
        $this->getContent();
    }
}