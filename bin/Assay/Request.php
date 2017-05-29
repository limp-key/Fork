<?php

namespace Fork\Bin\Assay;

class Request{

    public function post(){
	$posts = $POSTS = $_POST;
	
	foreach($posts as $post){
	    echo $post;
	}
    }

    public function get(){
	$gets = $GETS = $_GET;

	foreach($gets as $get){
	    echo $get;
	}
    }
}
