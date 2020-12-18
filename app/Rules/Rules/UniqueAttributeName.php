<?php

namespace App\Rules\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\AttributesTranslation;
class UniqueAttributeName implements Rule
{
    private $attributeName;
    private $attributeId;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($attributeName,$attributeId)
    {
        $this->attributeName = $attributeName;
        $this->attributeId = $attributeId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->attributeId){
            $attributeName = AttributesTranslation::where('name',$value)->where('attributes_id','!=',$this->attributeId)->first();
        }
        else{
            $attributeName = AttributesTranslation::where('name',$value)->first();
        }
        $attributeName = AttributesTranslation::where('name',$value)->first();
        if($attribute){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This name is already exists before';
    }
}
