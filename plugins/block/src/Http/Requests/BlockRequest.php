<?php

namespace Botble\Block\Http\Requests;

use Botble\Base\Http\Requests\Request;

class BlockRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * @author Sang Nguyen
     */
    public function authorize()
    {

        // Determine if the user is authorized to view the module.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function rules()
    {
        return [
            'name' => 'required|max:120',
            'alias' => 'required|max:120',
        ];
    }
}
