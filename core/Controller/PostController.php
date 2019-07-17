<?php

namespace Pam\Controller;

/**
 * Class PostController
 * @package Pam\Controller
 */
class PostController implements PostControllerInterface
{
    /**
     * @var mixed
     */
    private $post;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->post = filter_input_array(INPUT_POST);
    }

    /**
     * @return mixed
     */
    public function getPostArray()
    {
        return $this->post;
    }

    /**
     * @param string $var
     * @return mixed
     */
    public function getPostVar(string $var)
    {
        return $this->post[$var];
    }
}
