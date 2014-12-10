<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Link as LinkModel;

/**
 * Link component class.
 */
class Link extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.link.component.name'),
			'description'	=> trans('axc.datamanagement::lang.link.component.description')
		];
	}

	/**
	 * Return the published links.
	 * @return array
	 */
	public function published()
	{
		return LinkModel::published();
	}
}