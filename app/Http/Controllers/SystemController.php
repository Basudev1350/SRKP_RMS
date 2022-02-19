<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function ExampleComponent()
  {
    return view('user.ExampleComponent');//folder.bladefile name
  }
  public function dashboard()
  {
    return view('user.dashboard');//folder.bladefile name
  }
  public function categorywiseReport()
  {
    return view('user.categorywiseReport');//folder.bladefile name
  }
  public function customReport()
  {
    return view('user.customReport');//folder.bladefile name
  }
  public function manageCategory()
  {
    return view('user.manageCategory');//folder.bladefile name
  }
  public function manageCompany()
  {
    return view('user.manageCompany');//folder.bladefile name
  }
  public function manageGroups()
  {
    return view('user.manageGroups');//folder.bladefile name
  }
  public function manageOrders()
  {
    return view('user.manageOrders');//folder.bladefile name
  }
  public function manageProducts()
  {
    return view('user.manageProducts');//folder.bladefile name
  }
  public function manageStore()
  {
    return view('user.manageStore');//folder.bladefile name
  }
  public function manageTables()
  {
    return view('user.manageTables');//folder.bladefile name
  }
  public function manageUsers()
  {
    return view('user.manageUsers');//folder.bladefile name
  }
  public function menuwiseReport()
  {
    return view('user.menuwiseReport');//folder.bladefile name
  }
  public function productAssembly()
  {
    return view('user.productAssembly');//folder.bladefile name
  }
  public function productwiseReport()
  {
    return view('user.productwiseReport');//folder.bladefile name
  }
}