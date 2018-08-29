<?php

/**
 * Created by PhpStorm.
 * User: PSI
 * Date: 08/03/2018
 * Time: 19:47
 */
class MY_Controller extends CI_Controller
{

    function showMessage($status, $content)
    {
        if ($status == true) {
            $this->session->set_flashdata('message', '<div class="alert alert-success display-hide" style="display: block;">
                                                    <button class="close" data-close="alert"></button>' . $content . '</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger display-hide" style="display: block;">
                                                    <button class="close" data-close="alert"></button>' . $content . '</div>');
        }
    }

}