<?php

namespace Embranchment\Session;

use \Configs\Project;

class SessionDataBase {

    public $Path = '';

    private $DataBaseConnect;

    /*
     *
     */
    public function __construct() {
	
	$DataBase = sprintf('%s/pantry/session/session.db', Project::$Path);

	$this->DataBaseConnect = new \SQLite3($DataBase);

	return true;
    }

    /*
     * Session close
     *
     * @return bool
     */
    public function close() {

	if ($this->DataBaseConnect->close()) {

	    return true;
	}
	
	return false;
    }

    /*
     * Open session for this request
     * 
     * @param string SavePath
     * @param string SessionName
     *
     * @return bool
     */
    public function open ($SavePath, $SessionName) {
	
	if ($this->DataBaseConnect) {

	    return true;
	}

	return false;
    }

    /*
     *
     *
     */
    public function destroy($SessionID) {
	
	return $Result = $this->DataBaseConnect->query("DELETE FROM session WHERE id = '{$SessionID}'");
    }

    /*
     *
     *
     */
    public function gc ($MaxLifeTime) {

	$Old = time() - $MaxLifeTime;
	
	return $Result = $this->DataBaseConnect->exec("DELETE FROM session WHERE Date < {$Old}");
    }

    /*
     * Read data on this session
     *
     * @param string SessionID
     *
     * @return mix
     */
    public function read( $SessionID ){

	$Result = $this->DataBaseConnect->query("SELECT Data FROM session WHERE ID = '{$SessionID}' ORDER BY Date DESC");
	
	if ($Result) {

	    $row = $Result->fetchArray(SQLITE3_ASSOC);

	    return $row['Data'];
	}
	
	return '';
    }

    /*
     * Write in database 
     *
     * @param string SessionID
     * @param array SessionData
     *
     * @return bool
     */
    public function write( $SessionID, $SessionData ){
	
	return $this->DataBaseConnect->query("INSERT INTO session (ID, Data, Date) VALUES ('{$SessionID}', '{$SessionData}', now())");
    }
}
