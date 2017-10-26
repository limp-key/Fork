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
}
