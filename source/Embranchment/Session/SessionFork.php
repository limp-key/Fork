<?php

namespace Embranchment\Session;

use \Configs\Project;

class SessionDataBase {

    public $Path = '';

    private $DataBaseConnect;

    public function __construct(){
	
	$DataBase = sprintf('%s/pantry/session/session.db', Project::$Path);

	// Instantiate new SQLite3 object
	$this->DataBaseConnect = new \SQLite3($DataBase);
	
	// Start the session
	session_start();

	return true;
    }
    
    public function close(){

	# Close the database connection
	# If successful
	#
	if($this->DataBaseConnect->close()){

	    # Return True
	    #
	    return true;
	}
	
	# Return False
	#
	return false;
    }

    public function destroy( $SessionID){

	# Set query
	#
	$result = $this->DataBaseConnect->query("DELETE FROM session WHERE id = '{SessionID}'");
	
	# If successful
	#
	if ($result) {

	    # Return True
	    #
	    return true;
	}
	
	# Return False
	#
	return false;
    }

    public function gc( $MaxLifeTime ){
	# Calculate what is to be deemed old
	$Old = time() - $MaxLifeTime;
	
	# Set query
	$result = $this->DataBaseConnect->exec("DELETE FROM session WHERE Date < {$Old}");
	
	# If successful
	#
	if ($result) {

	    # Return True
	    #
	    return true;
	}
	
	# Return False
	#
	return false;
    }

    public function open( $SavePath, $SessionName ){

	# If successful
	#
	if ($this->DataBaseConnect) {

	    # Return True
	    #
	    return true;
	}
	
	# Return False
	#
	return false;
    }

    public function read( $SessionID ){

	# Set query
	#
	$result = $this->DataBaseConnect->query("SELECT Data FROM session WHERE ID = '{$SessionID}' ORDER BY Date DESC");
	
	# If successful
	#
	if ($result) {

	    # Return True
	    #
	    $row = $result->fetchArray(SQLITE3_ASSOC);

	    return $row['Data'];
	}
	
	# Return False
	#
	return '';
    }

    public function write( $SessionID, $SessionData ){

	# Create time stamp
	#
	$Time = time();
	
	# Set query  
	#
	$result = $this->DataBaseConnect->query("
	       INSERT INTO session (
                 ID, Data, Date
               ) VALUES (
                 '{$SessionID}', 
                 '{$SessionData}', 
                 '{$Time}'
               )");

	# If successful
	#
	if ($result) {

	    # Return True
	    #
	    return true;
	}
	
	# Return False
	#
	return false;
    }
}
