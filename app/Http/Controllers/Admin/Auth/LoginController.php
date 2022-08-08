<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest:admin')->except('logout');
    }
    public function login()
    {
        if(View::exists('admin.auth.login'))
        {
            return view('admin.auth.login');
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    public function processLogin(Request $request)
    {


        $credentials = $request->except(['_token']);

        if(isAdminActive($request->email))
        {
            if(Auth::guard('admin')->attempt($credentials))
            {
                session()->flash('message','مرحبا بك');
                session()->flash('type','info');
                return redirect(RouteServiceProvider::ADMIN);
            }
            session()->flash('no_active' , __('الرجاء التأكد من البريد الالكتروني او كلمة المرور') );
            return redirect()->action([
                LoginController::class,
                'login'
            ]);
        }
        session()->flash('no_active' , __('هذا الحساب معطل يرجى التواصل من الدعم الفني') );
        return redirect()->route("admin.login")->withInput();

    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
