<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding,Authorization");
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            return $this->sendJson(array("status" => false,  'errors' => $this->form_validation->error_array()));
        }else{
            if ($this->input->method() === 'post') {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->user_model->get_user($email);
                if ($user && password_verify($password, $user->password)) {
                    $token_data['uid'] = $user->id;
                    $token_data['username'] = $user->username;
                    $token_data['email'] = $user->email;
                    $tokenData = $this->authorization_token->generateToken($token_data);
                    return $this->sendJson(array("token" => $tokenData, "status" => true, "response" => "Login Success!"));

                }else{
                    return $this->sendJson(array("token" => null, "status" => false, "response" => "Login Failed!"));
                }
                /* if ($email == "test@mail.com" and $password == "1234") {
                    $token_data['userEmail'] = $email;
                    $token_data['userRole'] = "Admin";
                    $tokenData = $this->authorization_token->generateToken($token_data);
                    return $this->sendJson(array("token" => $tokenData, "status" => true, "response" => "Login Success!"));
                } else {
                    return $this->sendJson(array("token" => null, "status" => false, "response" => "Login Failed!"));
                } */
            } else {
                return $this->sendJson(array("message" => "POST Method", "status" => false));
            }
        }

    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            return $this->sendJson(array("status" => false,  'errors' => $this->form_validation->error_array()));
        }else{
            if ($this->input->method() === 'post') {
                $username = $this->input->post('username');
                $email    = $this->input->post('email');
                $password = $this->input->post('password');
                $res = $this->user_model->create_user($username, $email, $password);

                if ($res = $this->user_model->create_user($username, $email, $password)) {
                    $token_data['uid'] = $email;
                    $token_data['username'] = $username;
                    $token_data['email'] = $email;
                    $tokenData = $this->authorization_token->generateToken($token_data);
                    return $this->sendJson(array("token" => $tokenData, "status" => true, "response" => "You have successfully register!"));
                } else {
                    return $this->sendJson(array("token" => null, "status" => false, "response" => "There was a problem creating your new account. Please try again."));
                }
            } else {
                return $this->sendJson(array("message" => "POST Method", "status" => false));
            }
        }

    }

    private function sendJson($data)
    {
        $this->output->set_header('Content-Type: application/json; charset=utf-8')->set_output(json_encode($data));
    }
}