<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * Show users list.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('roles.index');
  }
}