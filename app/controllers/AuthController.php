<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller {
    
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            
            // Validação
            if (empty($data['name'])) {
                $data['name_err'] = 'Por favor, informe o nome';
            }
            
            if (empty($data['email'])) {
                $data['email_err'] = 'Por favor, informe o email';
            } elseif ($this->userModel->findByEmail($data['email'])) {
                $data['email_err'] = 'Email já está em uso';
            }
            
            if (empty($data['password'])) {
                $data['password_err'] = 'Por favor, informe a senha';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'A senha deve ter pelo menos 6 caracteres';
            }
            
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Por favor, confirme a senha';
            } elseif ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'As senhas não conferem';
            }
            
            // Sem erros
            if (empty($data['name_err']) && empty($data['email_err']) && 
                empty($data['password_err']) && empty($data['confirm_password_err'])) {
                
                if ($this->userModel->register($data)) {
                    $_SESSION['success_msg'] = 'Registro realizado com sucesso! Faça login.';
                    $this->redirect('auth/login');
                } else {
                    die('Algo deu errado');
                }
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
        }
        
        $this->view('auth/register', $data);
    }
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'email' => trim($_POST['email']),
                'password' => $_POST['password'],
                'email_err' => '',
                'password_err' => ''
            ];
            
            // Validação
            if (empty($data['email'])) {
                $data['email_err'] = 'Por favor, informe o email';
            }
            
            if (empty($data['password'])) {
                $data['password_err'] = 'Por favor, informe a senha';
            }
            
            // Verificar usuário
            if (empty($data['email_err']) && empty($data['password_err'])) {
                $user = $this->userModel->login($data['email'], $data['password']);
                
                if ($user) {
                    $this->createUserSession($user);
                    
                    // Redirecionar para a página anterior ou home
                    if (isset($_SESSION['redirect_url'])) {
                        $redirect_url = $_SESSION['redirect_url'];
                        unset($_SESSION['redirect_url']);
                        $this->redirect($redirect_url);
                    } else {
                        $this->redirect('');
                    }
                } else {
                    $data['password_err'] = 'Email ou senha incorretos';
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
        }
        
        $this->view('auth/login', $data);
    }
    
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        session_destroy();
        $this->redirect('');
    }
    
    private function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_email'] = $user->email;
    }
    
    public function profile() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth/login');
            return;
        }
        
        $data = [
            'title' => 'Meu Perfil - UrbanAlternative',
            'user' => [
                'name' => $_SESSION['user_name'],
                'email' => $_SESSION['user_email']
            ]
        ];
        
        $this->view('auth/profile', $data);
    }
}