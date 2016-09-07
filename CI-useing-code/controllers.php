<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class controllers extends  controllers{

	function __construct () {
		parent::__construct(); 
	}
	
	 function displayIcon(){
                if(!empty($_REQUEST['submit'])){
                if(isset($_REQUEST['crouselselection'])){
                        $crouselselection = array();
                        $c=0;
                        $length = count($_REQUEST['crouselselection']);
                        for($i=0; $i < $length; $i+=3){
                            if(!empty($_REQUEST['crouselselection'][$i]['value'])){
                                $crouselselection[$c]['d'] = $_REQUEST['crouselselection'][$i]['value'];
                                $crouselselection[$c]['k'] = $_REQUEST['crouselselection'][$i+1]['value'];
                                $crouselselection[$c]['v'] = $_REQUEST['crouselselection'][$i+2]['value'];
                                $c++;
                            }
                        }
                        
                        $params['crousel'] = serialize($crouselselection);
                        
                }
                
                $data['cyz'] = unserialize('$restult');
        }
}	
	
