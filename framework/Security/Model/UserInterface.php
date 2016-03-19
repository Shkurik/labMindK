<?php

/**
 * Created by PhpStorm.
 * User: Sanya
 */

namespace Framework\Security\Model;
/**
 * Interface UserInterface
 * @package Framework\Security\Model
 */
interface UserInterface {
    /**
     * Returns role of user
     * @return mixed
     */
    public function getRole();
}