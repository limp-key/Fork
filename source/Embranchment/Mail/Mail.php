<?php

namespace \Embranchment\Mail;

class Mail{
    
    /* 
     * Variable 
     *
     * @var string
     */
    public $To;
    
    /* 
     * Subject of message email
     *
     * @var string
     */
    public $Subject;

    /* 
     * Body of message email
     *
     * @var string
     */
    public $Message;

    /*
     * Send email
     *
     * @return bool
     */
    public function Send() {

	mail($this->To,
	     $this->Subject,
	     $this->Message);
    }

    /*
     * Generate message for post
     *
     * @param string
     *
     * @return this
     */
    public function Message($Message) {

	$this->Message = $Message;
	
	return $this;
    }

    /*
     * Generate template for post
     *
     * @param string or resourse
     * @param bool
     * 
     * @return this
     */
    public function Template($Template, $Resourse = false) {

	if (!$Resourse) {

	    $Template = file_get_contents($Template);
	}

	$this->Message = $Template;
	
	return $this;
    }
}
