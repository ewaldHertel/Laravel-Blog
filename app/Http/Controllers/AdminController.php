<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JeroenNoten\LaravelAdminLte\AdminLte;

class AdminController extends Controller
{

  private $adminlte;

  public function __construct(AdminLte $adminlte)
  {
      $this->adminlte = $adminlte;
  }

  public function index()
  {
    return redirect()->route('admin.dashboard');
  }

  public function dashboard()
  {
    return view('admin.dashboard')->withadminlte($this->adminlte);
  }
}
