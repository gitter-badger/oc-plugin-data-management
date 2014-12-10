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
class InsuranceContent extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_insurance_content';

	/**
	 * AxC\DataManagement\Models related models that belongs to.
	 * @var array
	 */
	public $hasMany = [
		'items' => ['AxC\DataManagement\Models\InsuranceContentItem', 'primaryKey' => 'insurance_content_id']
	];

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'title'			=> 'required|unique:axc_data_management_insurance_content|between:5,100',
		'position'	=> 'required|integer',
		'published'	=> 'boolean'
	];

	/**
	 * Fields to translate.
	 * @var array
	 */
	public $translatable = ['title'];
}