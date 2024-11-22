<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait Calc {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function add(Request $request, $a,$b) {
      return $a + $b;
    }
}