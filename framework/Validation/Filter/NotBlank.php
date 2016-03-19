<?php
/**
 * Created by PhpStorm.
 * User: Sanya
 */

namespace Framework\Validation\Filter;


namespace Framework\Validation\Filter;

/**
 * Class NotBlank
 * @package Framework\Validation\Filter
 */
class NotBlank implements ValidationFilterInterface {
    /**
     * Checks is valid value
     *
     * @param $value
     * @return bool
     */
    public function isValid( $value ) {
        return !empty( $value );
    }
}