<?php
namespace App\Http\Requests\backend;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class AreaRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    public function rules(){
        foreach(\LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $id = $this->request->get('id_'.substr($properties['regional'],0,2)) ? ',' . $this->request->get('id_'.substr($properties['regional'],0,2)) : '';
            $rules['title_'.substr($properties['regional'],0,2)] = 'required|unique:area_translations,title'.$id;
            $rules['slug_'.substr($properties['regional'],0,2)] = 'unique:area_translations,slug'.$id;
        } 

        $rules['country_id'] =  'exists:countries,id';   
        $rules['city_id'] =  'exists:cities,id';   
        return $rules; 
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'status'   => 'RequestValidation',
            'msg'      => $validator->errors()
        ]));
    }    
}