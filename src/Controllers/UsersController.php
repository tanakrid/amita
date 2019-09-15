<?php

namespace App\Controllers;

use App\Framework\Utilities\Session;
use App\Models\User;
use Exception;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->all();
        return $this->render('users/index', ['users' => $users]);
    }

    public function show()
    {
        if (!isset($this->request->params[0])) {
            throw new Exception('Data Not Found');
        }
        $id = $this->request->params[0];
        $user = (new User())->first($id);
        return $this->render('users/show', ['user' => $user]);
    }

    public function sessionSet() {
        Session::write('user_id', 1);
        return $this->render('users/sessionSet');
    }

    public function sessionGet() {
        return $this->render('users/sessionGet');
    }

    public function authen() {
        $id = 1;
        $user = (new User())->first($id);

        if ($user) {
            Session::write('Auth', [
                'name' => $user->name,
                'role' => 'Admin'
            ]);
        }
        return $this->render('users/sessionGet');
    }

    public function authorize() {
        $auth = Session::read('Auth');

        if (!$auth or $auth['role'] != 'Admin') {
            return 'You have no permission';
        }
        return $this->render('users/sessionGet');
    }

    public function logout() {
        Session::destroy();
        $this->redirect('users/index');
    }
}