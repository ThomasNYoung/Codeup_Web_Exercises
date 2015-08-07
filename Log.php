<?php

class Log
{
    // todo - complete this function
	
	private $filename;
	protected $handle;
	public function __construct($prefix = 'log'){
				$this->setFilename($prefix);
				$this->handle = fopen($this->filename, 'a');
	}
	
	public function logMessage($logLevel, $message){
				fwrite($this->handle, PHP_EOL . "[{$logLevel}] {$message}");
	}
	
	
	public function logInfo($message){
		$logLevel = 'INFO';
		return $this->logMessage($logLevel, $message);
	}

	public function logError($message){
		$logLevel = 'ERROR';
		return $this->logMessage($logLevel, $message);
	}
	public function __deconstruct(){
				fclose($handle);
		
	}
	
	public function setFilename($filename){
		 $this->filename = trim($filename);

		 if(is_string($prefix){
		 	$this->prefix =$prefix . date('Y-d-m') . '.log';
		 }else{
		 	die();
		 }
	}

	public function getFilename(){
		return $this->filename;
	}


}

// $log = new Log();
// $log->filename = "log-" . date('Y-d-m') .  ".log";
// $log->logInfo('Here is new info');
// $log->logError('THis is an error');