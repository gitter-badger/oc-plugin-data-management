<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Link model class.
 */
class Link extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_link';

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'title'				=> 'required|unique:axc_data_management_link|between:5,100',
		'description'	=> 'required|unique:axc_data_management_link|min:50',
		'url'					=> 'required|unique:axc_data_management_link|url',
		'position'		=> 'required|integer',
		'published'		=> 'boolean'
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
	public $translatable = ['title', 'description'];
}