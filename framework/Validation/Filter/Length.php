<?php

/**
 * Created by PhpStorm.
 * User: Sanya
 * Date: 19.03.2016
 * Time: 22:52
 */

namespace Framework\Validation\Filter;

/**
 * Class Length
 * @package Framework\Validation\Filter
 */
class Length implements ValidationFilterInterface {
    /**
     * Minimum and maximum allowed length
     * @var int
     */
    protected $min;
    protected $max;

    /**
     * Length constructor.
     * @param $min
     * @param $max
     */
    public function __construct( $min, $max ) {
        if( $min > 0 && $max >= $min) {
            $this->min = $min;
            $this->max = $max;
        }
        else {
            $this->min = 0;
            $this->max = 5;
        }
    }

    /**
     * Checks is valid value
     *
     * @param $value
     * @return bool
     */
    public function isValid( $value ) {
        $lenValue = strlen( $value );
        return ( $this->min <= $lenValue && $lenValue <= $this->max );
    }
}