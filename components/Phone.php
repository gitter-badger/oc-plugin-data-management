<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Phone as PhoneModel;

/**
 * Phone component class.
 */
class Phone extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.phone.component.name'),
			'description'	=> trans('axc.datamanagement::lang.phone.component.description')
		];
	}

	/**
	 * Return all the published phones.
	 * @return array
	 */
	public function published()
	{
		return PhoneModel::published();
	}

	/**
	 * Return the principal phone.
	 * @return AxC\DataManagement\Models\Phone
	 */
	public function principal()
	{
		return PhoneModel::principal();
	}
}