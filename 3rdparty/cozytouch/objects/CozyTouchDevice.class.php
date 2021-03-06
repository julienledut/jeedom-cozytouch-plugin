<?php

require_once dirname(__FILE__) .'/../constants/CozyTouchConstants.class.php';

/**
* Class CozyTouchPlace
*
*/
class CozyTouchDevice extends CozyTouchObject
{

    public function __construct($array)
    {
        parent::__construct($array);
    }

    /**
    * @return string
    * @brief returns home's name
    */
    public function getId()
    {
        return $this->getVar(CozyTouchDeviceInfo::CTDI_OID);
    }
    
    public function getURL()
    {
    	return $this->getVar(CozyTouchDeviceInfo::CTDI_URL);
    }

    public function getModel()
    {
    	return $this->getVar(CozyTouchDeviceInfo::CTDI_CONTROLLABLENAME);
    }

    public function getStates()
    {
        return $this->getVar(CozyTouchDeviceInfo::CTDI_STATES, array());
    }
    
    public function getSensors()
    {
    	return $this->getVar(CozyTouchDeviceInfo::CTDI_SENSORS, array());
    }
}

?>
