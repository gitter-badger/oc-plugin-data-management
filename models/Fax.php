<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Fax model class.
 */
class Fax extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_fax';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'type'			=> 'required|unique:axc_data_management_fax|between:3,20',
		'number'		=> 'required|unique:axc_data_management_fax|between:5,20|regex:/[0-9\ \-\(\)]*/',
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