<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notification;

class firebase extends Controller
{
    public function testfb()
    {
    	// echo "dat";

    	$noti = new notification;

    	$token = 'dPtA41K1x1rN8NDb62hVCK:APA91bESDuOqkUbi-wewFQbBfDRNCdtCWPTS9IVHkH-nGmQ4pi2vuRLZ8L3pU2O2QHkPJI6LLETq3xfp8ezjoSeiZkI0KrCW44CXW-T0FxvrBdSIoU7hXvHuwXPqrAk8b38KVZMogPPi';

    	$noti->toSingleDevice($token, 'title', 'body', null, null);

    	echo "okee da gui";
    }
}
