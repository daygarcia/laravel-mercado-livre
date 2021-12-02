<?php

namespace App\Http\Requests\LaravelMercadoLivre;

use Illuminate\Foundation\Http\FormRequest;

class ItemPostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'                     => 'required|string',
            'category_id'               => 'required|integer',
            'price'                     => 'required|numeric',
            'currency_id'               => 'required|string',
            'available_quantity'        => 'required|integer',
            'buying_mode'               => 'required|string',
            'listing_type_id'           => 'required|string',
            'condition'                 => 'required|string',
            'sale_terms'                => 'required|array:id,value_name',
            'sale_terms.*.id'           => 'required|string',
            'sale_terms.*.value_name'   => 'required|string',
            'pictures'                  => 'required|array:source',
            'pictures.*.source'         => 'required|string',
            'attributes'                => 'required|array:id,value_name',
            'attributes.*.id'           => 'required|string',
            'attributes.*.value_name'   => 'required|string',
        ];
    }
}
