<?php

namespace App\Helpers;
 
/**
 *  Name         : GetData.
 *  Description  : This class for Get Data setting.
 *  @copyright   : Badri Zaki
 *  @version     : 1.8
 *  @author      : Badri Zaki - badrizaki@gmail.com
**/

abstract class GetData
{
    static private $setting;
	static private $template;
	static private $count;
    static private $data;
	static private $dataTemplate;

    public static function setting()
    {
        if (!self::$setting)
        {
        	if (!self::$data)
        	{
        		self::$data = new \stdClass();
            	self::$data->count = [];
        	}

            $settingData = \App\Models\Setting::where('publish', 1)->orderBy('order', 'ASC');
            $settingData = $settingData->get();
            if ($settingData)
            {
                $settingData = $settingData->toArray();
                foreach ($settingData as $key => $value)
                {
                	$name = $value['key'];
                    self::$data->$name = $value;
                }
            }
        	self::$setting = true;
        }
        return self::$data;
    }

    public static function template()
    {
        if (!self::$template)
        {
            if (!self::$dataTemplate)
            {
                self::$dataTemplate = new \stdClass();
                self::$dataTemplate->count = [];
            }

            $settingData = \App\Models\Template::orderBy('created_at', 'ASC');
            $settingData = $settingData->get();
            if ($settingData)
            {
                $settingData = $settingData->toArray();
                foreach ($settingData as $key => $value)
                {
                    $name = $value['key'];
                    self::$dataTemplate->$name = $value;
                }
            }
            self::$setting = true;
        }
        return self::$dataTemplate;
    }
}