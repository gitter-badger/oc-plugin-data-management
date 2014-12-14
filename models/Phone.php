<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Phone model class.
 */
class Phone extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_phone';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'type'			=> 'required|unique:axc_data_management_phone|between:3,20',
		'number'		=> 'required|unique:axc_data_management_phone|between:5,20|regex:/[0-9\ \-\(\)]*/',
		'position'	=> 'required|integer',
		'published'	=> 'boolean',
		'principal'	=> 'boolean'
	];

	/**
	 * Fields to translate.
	 * @var array
	 */
	public $translatable = ['type'];
}