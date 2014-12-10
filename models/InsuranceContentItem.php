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
class InsuranceContentItem extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_insurance_content_item';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'value'			=> 'required|select_unique:axc_data_management_insurance_content_item,insurance_content_id|between:5,100',
		'position'	=> 'required|integer',
		'published'	=> 'boolean'
	];

	/**
	 * Fields to translate.
	 * @var array
	 */
	public $translatable = ['value'];
}