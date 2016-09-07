<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('ROOT_PATH', dirname(__FILE__));
include_once(ROOT_PATH.'/brand_base.php');

class Customize_template extends Brand_base {

	function __construct () {
		parent::__construct(); 
	}
	
	 function displayIcon(){
                if(!empty($_REQUEST['submit']) && !empty($this->notificationID)){
                    //print_r($_REQUEST['advselection']);die;
                        if(!empty($_REQUEST['type'])){
                                $params['type'] = $_REQUEST['type'];
                        }
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
                        
                        //print_r($params); die;
                        $result = $this->m_notifications->update($this->notificationID, $this->selfUID, $params);
                        //print_r($result); 
                        if($result > 0){
                                $data['responseType'] = 'success';
                                $data['message'] = 'Successfully updated';
                        } else {
                                $data = array( 'message' => 'Please try again!');			
                        }
			$this->_sendResponse($data);
		}
                $data = array();
                $data['crouselselection'] = unserialize($this->notificationInfo['crousel']);
              
                $response['html'] = $this->_loadView('retailer/customize/view',$data,true);
		$this->_sendResponse($response);
        }
}	
	
