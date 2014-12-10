<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Slide-show model class.
 */
class Slideshow extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_slideshow';
	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'title'				=> 'required|unique:axc_data_management_slideshow|between:5,100',
		'description'	=> 'required|unique:axc_data_management_slideshow|min:50',
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