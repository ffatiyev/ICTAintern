<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function aaa() {
        $user = DB::table('tofiq')->where('id', 5)->insert([
            'role' => 'ilk',
            'role' => 'ilk',
        ]);
    }
}
