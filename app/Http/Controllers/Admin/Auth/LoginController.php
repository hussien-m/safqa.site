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
            if(Auth::guard('admin')->attempt($credentials)){

                toast('مرحبا بك '.Auth::user()->name,'success');
                return redirect(RouteServiceProvider::ADMIN);
                
            } else {

                toast('تاكد من البريد الالكتروني او كلمة المرور','success');
                return redirect()->action([
                    LoginController::class,
                    'login'
                ]);

            }

        }
        toast('هذا الحساب معطل مؤقتا تواصل مع الادارة','warning');
        return redirect()->route("admin.login")->withInput();

    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
