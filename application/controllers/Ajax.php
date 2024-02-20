<?php

class Ajax extends CI_Controller {

    public function processnames() {
        if ($this->input->is_ajax_request()) {
            // Check if it's the email form with 'name' field
            if ($this->input->post('name')) {
                // Process the email form
                $name = strip_tags(trim($this->input->post('name')));
                $email = strip_tags(trim($this->input->post('email')));
                $confirmEmail = strip_tags(trim($this->input->post('confirmEmail')));
                $phone = strip_tags(trim($this->input->post('phone')));
                $selectedCounselor = strip_tags(trim($this->input->post('counselor')));
                $whoChoice = strip_tags(trim($this->input->post('whoChoice')));
                $childAge = strip_tags(trim($this->input->post('childAge')));
                $message = strip_tags(trim($this->input->post('message')));
                

                if (!empty($name) && !empty($email) && $email === $confirmEmail && !empty($phone) && !empty($message)) {
                    // Prepare and send the email
                    $to = 'melissa@cssdallas.com'; 
                    $emailSubject = "New CSS Dallas Contact Form Submission";
                    $emailBody = "Name: $name\n";
                    $emailBody .= "Email: $email\n";
                    $emailBody .= "Phone: $phone\n";
                    $emailBody .= "Selected Counselor: $selectedCounselor\n";
                    $emailBody .= "Who this is for: $whoChoice\n";
                    $emailBody .= "Child Age: $childAge\n";
                    $emailBody .= "Message: $message\n";

                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                    $headers .= 'From: <no-reply@cssdallas.com>' . "\r\n";

                    if (mail($to, $emailSubject, $emailBody, $headers)) {
                        echo "okay";
                    } else {
                        echo "error";
                    }
                } else {
                    echo "error";
                }
            }
            // Check if it's the search form with 'mname' field
            elseif ($this->input->post('mname')) {
                // Process the new search form
                $monsterName = strip_tags(trim($this->input->post('mname')));

                if (!empty($monsterName)) {
                    echo "okay";
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        } else {
            // Not an AJAX request
            show_error('No direct script access allowed');
        }
    }

    public function index() {
        // Placeholder for the default method
        echo "";
    }
}