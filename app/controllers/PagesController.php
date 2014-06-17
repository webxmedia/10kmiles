<?php
/**
 * Created by PhpStorm.
 * User: WEBxMedia
 * Date: 17/06/2014
 * Time: 00:16
 */

class PagesController extends BaseController {

    public function home() {

        $name = 'Matt Whiteman';

        return View::make('test')->with('name', $name);

    }

}