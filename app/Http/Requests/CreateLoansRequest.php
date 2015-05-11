<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateLoansRequest extends Request {

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
			'kit_on_loan' => 'required',
			'on_loan_to' => 'required',
			'date_to_return' => 'required',
			'kit_loan_location' => 'required',
			'contact' => 'required'
		];
	}

}
