<?php

namespace \Embranchment\Mail;

class Mail{

    public $To;

    public $Subject;

    public $Message;

    public function Send() {

	mail($this->To,
	     $this->Subject,
	     $this->Message);
    }
}
