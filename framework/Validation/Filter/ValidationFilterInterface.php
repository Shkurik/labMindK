<?php
/**
 * Created by PhpStorm.
 * User: Sanya
 */

namespace Framework\Validation\Filter;


namespace Framework\Validation\Filter;

interface ValidationFilterInterface {
    /**
     * @param $value
     * @return mixed
     */
    public function isValid( $value );
}