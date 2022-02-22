<?php

namespace common\helpers;

use Yii;

class ConfigHelper{

    private $json_file = "../common/config/preferences.json";
    private $data;
    function __construct() {
        $json = file_get_contents($this->json_file);
        $this->data = json_decode($json,true);
    }

    public function getAdminEmail()
    {
        return $this->data['admin_email'];
    }

    public function getStartMembershipCode()
    {
        return $this->data['start_membership_code'];
    }

    public function getSystemName()
    {
        return $this->data['system_name'];
    }

    public function getLogo()
    {
        return $this->data['logo'];
    }
    
    public function getRealLogo()
    {
        if(isset($this->data['real_logo'])){
            return $this->data['real_logo'];
        }

        else {
            return null;
        }
        
    }

    public function getCurrency()
    {
        return $this->data['currency'];
    }

    public function getTimezone()
    {
        return $this->data['timezone'];
    }

    public function getCountry()
    {
        return $this->data['country'];
    }

    public function getCity()
    {
        return $this->data['city'];
    }

    public function getContract()
    {
        return $this->data['contract'];
    }

    public function getVat()
    {
        return $this->data['vat'];
    }


    public function getCountryPhone()
    {
        if(isset($this->data['country_phone'])){
            return $this->data['country_phone'];
        }
    }
}