<?php

namespace common\helpers;

use Yii;

class AppHelper{

	/**
	 * Used to reach actions from other controllers
	 * @param [type] $args [description]
	 */
	public static function Url($args = array()){
		$link = '';
		if($args){	
			$link = $args[0];
			$count = 0;

			$get_array = [];
			foreach ($args as $key => $value) {
				if($count == 0){
					continue;
					$count++;
				}

				$get_array[]  = $key.'='.$value;
			}

			if(count($get_array)){
				$link .= '?'.implode('&', $get_array);
			}
		}else{
			$link = '/';
		}

		return Yii::$app->homeUrl . '..' . $link;
	}

	/**
	 * [get the flash messages and show them All]
	 * @return [type] [description]
	 */
	public static function showFlashMessages(){
        $flashMessages = Yii::$app->session->getAllFlashes();
        if($flashMessages):
            foreach ($flashMessages as $key => $message):
        ?>
            <div class="alert alert-<?= $key ?>"><?= $message ?></div>
        <?php
            endforeach;
        endif;
	}

	/**
	 * Used to see if an input is checked or not
	 * @param  [type]  $var   [description]
	 * @param  [type]  $value [description]
	 * @return boolean        [description]
	 */
	public static function isChecked($var,$value,$checkedWord = 'checked'){
		return $var==$value?$checkedWord:'';
	}

	public static function priorityLabel($priority){
		switch ($priority) {
            case 2:
                return '<span class="label label-sm label-danger" style="margin:7px" > Top </span>';
                break;
            case 1:
                return '<span class="label label-sm label-success" style="margin:7px" > Normal </span>';
                break;
            
            default:
                return '<span class="label label-sm label-info" style="margin:7px" > Low </span>';
                break;
        }

	}
	public static function statusLabel($status){
		switch ($status) {
			case 5:
                return '<span class="label label-sm label-success"> FU </span>';
                break;
			case 4:
                return '<span class="label label-sm label-success"> NI </span>';
                break;
			case 3:
                return '<span class="label label-sm label-danger"> NS </span>';
                break;
            case 2:
                return '<span class="label label-sm label-success"> RS </span>';
                break;
            case 1:
                return '<span class="label label-sm label-warning"> Joined </span>';
                break;
            
            default:
                return '<span class="label label-sm label-default"> Add </span>';
                break;
        }
	}
	
}