<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Email model class.
 */
class Email extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_email';

	/**
	 * To update principal field before save.
	 */
	use \AxC\Framework\Traits\FieldPrincipal;

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'type'			=> 'required|unique:axc_data_management_email|between:3,20',
		'address'		=> 'required|unique:axc_data_management_email|between:5,50|email',
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