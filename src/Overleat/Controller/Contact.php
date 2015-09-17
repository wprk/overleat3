<?php

/*
 * This file is part of the Overleat Care Home Website package.
 *
 * (c) Will Parker <will@wipar.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overleat\Controller;

use Respect\Validation\Validator;

class Contact extends \SlimController\SlimController
{
    public function formAction()
    {
        $formValues = array(
            'name' => $this->request()->post('name', ''),
            'email' => $this->request()->post('email', ''),
            'phone' => $this->request()->post('phone', ''),
            'message' => $this->request()->post('message', ''),
            'g-recaptcha-response' => $this->request()->post('g-recaptcha-response', ''),
        );

        $errors = array(
            'error_name' => '',
            'error_email' => '',
            'error_phone' => '',
            'error_message' => '',
            'error_recaptcha' => '',
        );

        if ($this->request()->isPost()) {
            $errors = array_merge($errors, $this->_processForm($formValues));
        }

        $this->render('partials/header', array(
            'active' => 'contact',
        ));
        $this->render('contact/form', array_merge(
            $formValues,
            $errors
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function successAction()
    {
        $this->render('partials/header', array(
            'active' => 'contact',
        ));
        $this->render('contact/success', array(

        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    private function _processForm($data)
    {
        $errors = $this->_checkData($data);

        if (!$errors) {
            $this->_sendEmail($data);
            $this->redirect('message-sent');
        }

        return $errors;
    }

    private function _checkData($data)
    {
        $errors = array();

        if (!isset($data['name']) || strlen($data['name']) < 5) {
            $errors['error_name'] = 'Please enter your full name.';
        }

        if (!isset($data['email']) || strlen($data['email']) < 5) {
            $errors['error_email'] = 'Please enter a your e-mail address.';
        } else {
            if (!$this->_validEmail($data['email'])) {
                $errors['error_email'] = 'Please enter a valid e-mail address.';
            }
        }

        if (!isset($data['phone']) || strlen($data['phone']) < 5) {
            $errors['error_phone'] = 'Please enter a your phone number.';
        } else {
            if (!$this->_validPhone($data['phone'])) {
                $errors['error_phone'] = 'Please enter a valid phone number.';
            }
        }

        if (!isset($data['message']) || strlen($data['message']) < 5) {
            $errors['error_message'] = 'Please enter your message.';
        }

        if (!$this->_checkRecaptcha($data['g-recaptcha-response'])) {
            $errors['error_recaptcha'] = "Your security token didn't match please try again.";
        }

        return $errors;
    }

    private function _checkRecaptcha($captcha)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6Ld2eQwTAAAAAKImz5TZKJcBaqrm0fq77M3VjcLT',
            'response' => $captcha,
        );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = json_decode(file_get_contents($url, false, $context), true);

        if ($result['success'] === true) {
            return true;
        } else {
            return false;
        }
    }

    private function _validEmail($email)
    {
        return Validator::email()->validate($email);
    }

    private function _validPhone($phone)
    {
        return Validator::phone()->validate($phone);
    }

    private function _sendEmail($data)
    {
        $mail = new \PHPMailer;

        //From email address and name
        $mail->From = $data['email'];
        $mail->FromName = $data['name'];

        //To address and name
        $mail->addAddress('wprk14@gmail.com', 'Ian Fletcher');

        //Address to which recipient will reply
        $mail->addReplyTo($data['email'], 'Reply to ' . $data['name']);

        //Send HTML or Plain Text email
        $mail->isHTML(true);

        $mail->Subject = 'Message from Overleat Website.';
        $mail->Body = $data['message'];
        $mail->AltBody = $data['message'];
        $mail->send();
    }
}
