<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;

use App\Models\Link;
use App\Models\User;
use App\Helpers\UserHelper;

class AdminController extends Controller {
    /**
     * Show the admin panel, and process setting changes.
     *
     * @return Response
     */

    public function displayAdminPage(Request $request) {
        if (!$this->isLoggedIn()) {
            return redirect(route('login'))->with('error', '请先登录再访问控制面板');
        }

        $username = session('username');
        $role = session('role');

        $user = UserHelper::getUserByUsername($username);

        if (!$user) {
            return redirect(route('index'))->with('error', '账号无效或被禁用');
        }

        return view('admin', [
            'role' => $role,
            'admin_role' => UserHelper::$USER_ROLES['admin'],
            'user_roles' => UserHelper::$USER_ROLES,
            'api_key' => $user->api_key,
            'api_active' => $user->api_active,
            'api_quota' => $user->api_quota,
            'user_id' => $user->id
        ]);
    }

    public function changePassword(Request $request) {
        if (!$this->isLoggedIn()) {
            return abort(404);
        }

        $username = session('username');
        $old_password = $request->input('current_password');
        $new_password = $request->input('new_password');

        if (UserHelper::checkCredentials($username, $old_password) == false) {
            // Invalid credentials
            return redirect('admin')->with('error', '当前密码无效，请重试');
        }
        else {
            // Credentials are correct
            $user = UserHelper::getUserByUsername($username);
            $user->password = Hash::make($new_password);
            $user->save();

            $request->session()->flash('success', "密码修改成功");
            return redirect(route('admin'));
        }
    }
}
