<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   use Translatable;
    
   /**
    * the relations to eager on very query.
    *
    * @var array
    */
   protected $with = ['translations'];
   
   protected $translatedAttributes = ['value'];
    /**
    * the attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['key','is_translatable','plain_value'];

     /**
    * the attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [
        'is_translatable' => 'boolean',
        'value' => 'string']; 

    /**
    * set the given setting.
    *
    * @var array $settings
    * @return void
    */
    public static function setMany($settings)
    {
        foreach($settings as $key => $value)
        {
            self::set($key, $value);
        }
       
    }
      /**
    * set the given setting.
    *
    * @param string $key
    * @param mixed $value
    * @return void
    */

    public static function set($key, $value)
    {
        if($key === 'translatable'){
            return static::setTranslatableSetting($value);
        }
        if(is_array($value)){
            $value = json_encode($value);
        }
        static::updateOrCreate(['key' => $key],['plain_value' => $value]);

    }

    /**
    * set the given setting.
    *
    * @var array $settings
    * @return void
    */

    public static function setTranslatableSetting($settings = [])
    {
        foreach($settings as $key => $value)
        {
            static::updateOrCreate(['key' => $key],
            [
             'is_translatable' => true,
             'value' => $value,   
            ]);
        }
    }


}
