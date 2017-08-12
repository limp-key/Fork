<?php

namespace \Modules\Session;

interface SessionHandlerInterface {
    
    abstract public bool Close ( void );
    
    abstract public bool Destroy ( string $SessionID );
    
    abstract public bool GC ( int $MaxLifeTime );
    
    abstract public bool Open ( string $SavePath , string $SessionName );
    
    abstract public string Read ( string $SessionID );
    
    abstract public bool Write ( string $SessionID , string $SessionData );
}


class SessionHandler extends SessionHandlerInterface{

    public function __construct(){
	
    }

    public function ID(){
	
    }
    
    public function Close(){
	
    }

    public function Destroy(){
	
    }

    public function GC(){
	
    }

    public function Open(){
	
    }

    public function Read(){
	
    }

    public function Write(){
	
    }
}


#ini_set('session.save_handler', 'files');
#$Handler = new SessionHandler();
#session_set_save_handler($Handler, true);
#session_start();
