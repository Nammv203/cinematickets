<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterUserRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = new User();
            $user->fill($request->all());
            $user->password = bcrypt($request->password);
            $user->role_id = 0; // customer
            $user->save();

            DB::commit();

            if ($user) {
                toastr()->success('Đăng ký tài khoản thành công!', 'Success');
                return redirect()->route('auth.showLoginForm');
            }
            return redirect()->back()->with(['error' => 'Đăng ký thất bại, thử lại sau!']);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'Đăng ký thất bại, thử lại sau!']);
        }
    }
}
