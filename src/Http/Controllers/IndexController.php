<?php
namespace MTCSB\Comet\Package\Http\Controllers;

use MTCSB\Comet\Core\Http\Controllers\BaseController as CometBaseController;

class IndexController extends CometBaseController
{
    public function index()
    {
        return view('comet.package::index');
    }
}