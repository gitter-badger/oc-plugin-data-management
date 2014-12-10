<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Fax as FaxModel;

/**
 * Fax component class.
 */
class Fax extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.fax.component.name'),
			'description'	=> trans('axc.datamanagement::lang.fax.component.description')
		];
	}

	/**
	 * Return all the published faxes.
	 * @return array
	 */
	public function published()
	{
		return FaxModel::published();
	}

	/**
	 * Return the principal fax.
	 * @return AxC\DataManagement\Models\Fax
	 */
	public function principal()
	{
		return FaxModel::principal();
	}
}