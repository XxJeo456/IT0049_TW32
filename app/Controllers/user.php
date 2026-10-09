<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function users()
    {
        $model = new UserModel();

        return view('user', [
            'users' => $model->findAll(),
        ]);
    }

    public function createForm()
    {
        return view('user_form');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'username'  => 'required|is_unique[users.username]',
            'email'     => 'permit_empty|valid_email',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new UserModel();

        $model->insert([
            'full_name'  => $this->request->getPost('full_name'),
            'username'   => $this->request->getPost('username'),
            'email'      => $this->request->getPost('email'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found.');
        }

        return view('user_form', [
            'user' => $user,
        ]);
    }

    public function update($id)
    {
        $rules = [
            'full_name' => 'required',
            'username'  => "required|is_unique[users.username,id,{$id}]",
            'email'     => 'permit_empty|valid_email',
        ];

        $file = $this->request->getFile('avatar');

        // Validate the image only when the user selected a file.
        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = 'uploaded[avatar]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]';
        }

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'username'  => $this->request->getPost('username'),
            'email'     => $this->request->getPost('email'),
        ];

        // Upload and resize the new profile image.
        if ($file && $file->isValid() && ! $file->hasMoved()) {
            $uploadPath = FCPATH . 'uploads/avatars';

            if (! is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }

            $filename = $file->getRandomName();
            $file->move($uploadPath, $filename);

            // Creates a 200 x 200 display-ready avatar.
            service('image')
                ->withFile($uploadPath . '/' . $filename)
                ->fit(200, 200, 'center')
                ->save($uploadPath . '/' . $filename);

            // Only the filename is saved in the database.
            $data['avatar'] = $filename;
        }

        $model = new UserModel();
        $model->update($id, $data);

        return redirect()->to('/users');
    }
}