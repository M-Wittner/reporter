<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database('');
        $this->load->model('user_model');
    }
    
    function index()
    {
        $this->register();
    }
    function register()
    {
        //set validation rules
<<<<<<< HEAD
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');

=======
        //$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        //$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        //$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');
       // $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        //$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
>>>>>>> 0dc24365d7137a21ce31352e43715f697dc06a6e
			//GO!
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {

            // fails
			die('Make it work fucker!');
            $this->load->view('signup_view');
<<<<<<< HEAD

=======
			
>>>>>>> 0dc24365d7137a21ce31352e43715f697dc06a6e
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'username' => $this->input->post('username'),
<<<<<<< HEAD
				'password' => $this->input->post('password'),
=======
                //'lname' => $this->input->post('lname'),
>>>>>>> 0dc24365d7137a21ce31352e43715f697dc06a6e
                'email' => $this->input->post('email'),
				 'fname' => $this->input->post('fname'),
				 'lname' => $this->input->post('lname'),
            );
			
			
			die('vaild!');
		
			die(print_r($data));
            
<<<<<<< HEAD

=======
			
>>>>>>> 0dc24365d7137a21ce31352e43715f697dc06a6e
            // insert form data into database
            if ($this->user_model->insertUser($data))
            {
                // send email
                if ($this->user_model->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('user/register');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    redirect('register/register');
                }
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('register/register');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('register/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('register/register');
        }
    }
}
?>
