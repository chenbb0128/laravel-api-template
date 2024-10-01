<?php
class H5OpenMiniGetMiniProgramSchemeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.h5OpenMini.getMiniProgramScheme";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return $this->apiParas;
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $path;
    	                        
	public function setPath($path){
		$this->path = $path;
         $this->apiParas["path"] = $path;
	}

	public function getPath(){
	  return $this->path;
	}

                        	                   			private $query;
    	                        
	public function setQuery($query){
		$this->query = $query;
         $this->apiParas["query"] = $query;
	}

	public function getQuery(){
	  return $this->query;
	}

                        	                   			private $envVersion;
    	                        
	public function setEnvVersion($envVersion){
		$this->envVersion = $envVersion;
         $this->apiParas["envVersion"] = $envVersion;
	}

	public function getEnvVersion(){
	  return $this->envVersion;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	}





        
 

