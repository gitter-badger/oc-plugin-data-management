<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

/**
 * Route model class.
 */
class Route extends \AxC\Framework\Models\Base
{
	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_route';

	/**
	 * Created and updated by users, page and locale foreign keys.
	 * @var array
	 */
	public $belongsTo = [
		'locale' => ['RainLab\Translate\Models\Locale', 'foreignKey' => 'locale']
	];

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'path'			=> 'required|unique:axc_data_management_route|between:3,100|regex:/[A-Za-z0-9\ \-\(\)]*/',
		'page'			=> 'required',
		'language'	=> 'exists:rainlab_translate_locales,code',
		'published'	=> 'boolean'
	];

	public function getLanguageOptions($keyValue = null)
	{
		return array_merge(
			[ '' => trans('axc.framework::lang.system.any') ],
			\RainLab\Translate\Models\Locale::listEnabled()
		);
	}

	public function getPageOptions($keyValue = null)
	{
		return \Cms\Classes\Page::getNameList();
	}
}