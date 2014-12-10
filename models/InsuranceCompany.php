<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * InsuranceCompany model class.
 */
class InsuranceCompany extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_insurance_company';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'title'			=> 'required|unique:axc_data_management_insurance_company|between:5,100',
		'url'				=> 'required|unique:axc_data_management_insurance_company|url',
		'position'	=> 'required|integer',
		'published'	=> 'boolean'
	];

	/**
	 * Single file attachment.
	 * @var array
	 */
	public $attachOne = [
		'image' => ['System\Models\File']
	];

	/**
	 * Fields to translate.
	 * @var array
	 */
	public $translatable = ['title'];
}