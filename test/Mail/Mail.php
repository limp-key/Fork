<?php

namespace Embranchment\Mail;

use \Embranchment\Helper\File;

class Mail{
    
    /* 
     * Information to who sent mail
     *
     * @var string
     */
    public $To;

    /* 
     * Information from who sent mail
     *
     * @var string
     */
    public $From;
    
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
     * Path to pantry dir
     *
     * @var string
     */
    public $PantryDir =__DIR__.'/../../../../../../pantry/';

    /*
     * Send email
     *
     * @return bool
     */
    public function Send() {

	$Header[] = "Content-type: text/html; charset=iso-8859-1";
	$Header[] = "From: {$this->From}";

	$Header = implode("\r\n", $Header);
	
	mail($this->To,
	     $this->Subject,
	     $this->Message,
	     $Header);
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
    public function Template($Template, $Parameters = array()) {

	$PathToFile = $this->PantryDir.$Template;
	
	$Content = File::GetIncludeContents($PathToFile, $Parameters);

	$this->Message = $Content;
	
	return $this;
    }
}
