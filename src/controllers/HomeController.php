<?php

namespace src\controllers;

use \core\Controller;
use \src\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::select()->orderBy('id', 'desc')->execute();

        $this->render('home', ['users' => $users]);
    }

    public function create()
    {
        $this->render('create');
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email');
        $name = filter_input(INPUT_POST, 'name');

        if ($email && $name) {
            $data = User::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                User::insert(['email' => $email, 'name' => $name])->execute();

                $_SESSION['info'] = 'Criado com sucesso!';

                $this->redirect('/');
            }
        }

        $_SESSION['info'] = 'Tente novamente!';

        $this->redirect('/create');
    }

    public function edit($id)
    {
        $user = User::select()->where('id', $id)->first();

        $this->render('edit', ['user' => $user]);
    }

    public function update($id)
    {
        $email = filter_input(INPUT_POST, 'email');
        $name = filter_input(INPUT_POST, 'name');

        if ($email && $name) {
            User::update(['email' => $email, 'name' => $name])->where('id', $id)->execute();

            $_SESSION['info'] = 'Editado com sucesso!';

            $this->redirect('/');
        }

        $_SESSION['info'] = 'Tente novamente!';

        $this->redirect('/create');
    }

    public function delete($id)
    {
        User::delete()->where('id', $id)->execute();

        $_SESSION['info'] = 'Excluído com sucesso!';

        $this->redirect('/');
    }
}
