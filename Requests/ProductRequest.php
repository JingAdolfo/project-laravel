<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {

	/**
	 *Get the validation rules that apply to the request.
	 *
	 *@return array
	 */

	public function rules()
	{
		return [
			'product_name' => 'required|unique:products',
			'price' => 'required'
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
}