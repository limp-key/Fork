<?php

namespace Fork\Controller;

trait ControllerRedirect{

    public function redirect($Path = '/'){

	# Create redirect path
	#
	$Redirect = sprintf('Location: %s', $Path);

	# Add redirect to response http header
	#
	header($Redirect);

	# Request exit,
	# Because this is a redirect
	#
	exit;
    }
}
