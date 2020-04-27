<?php

namespace src\controllers;

use \core\Controller;
use \src\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::select()->execute();

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

        User::insert(['email' => $email, 'name' => $name])->execute();

        $this->redirect('/');
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

        User::update(['email' => $email, 'name' => $name])->where('id', $id)->execute();

        $this->redirect('/');
    }

    public function delete($id)
    {
        User::delete()->where('id', $id)->execute();

        $this->redirect('/');
    }

    public function about()
    {
        $this->render('about');
    }
}
