<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Http\Requests\Auth;
use App\Models\User;
use App\Slim\Model\User\QMUser;
use Illuminate\Foundation\Http\FormRequest;
class RegisterRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 * @return bool
	 */
	public function authorize(): bool{
		return true;
	}
	/**
	 * Get the validation rules that apply to the request.
	 * @return array
	 */
	public function rules(): array{
		return [
			User::FIELD_USER_LOGIN => 'required|unique:wp_users',
			'user_email' => 'required|unique:wp_users',
			'user_pass' => 'required|confirmed',
			//'display_name' => 'required',
			'terms' => 'required',
		];
	}
}
