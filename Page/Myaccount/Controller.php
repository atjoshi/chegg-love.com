<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author ben
 */
namespace Lovecom\Page\Myaccount;

class Controller extends \Lovecom\Mvc\PageController {
     public function getPermissions()
     {
         return array('user.normal'); 
     }
}
