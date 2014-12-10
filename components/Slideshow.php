<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\Slideshow as SlideshowModel;

/**
 * Slideshow component class.
 */
class Slideshow extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.slideshow.component.name'),
			'description'	=> trans('axc.datamanagement::lang.slideshow.component.description')
		];
	}

	/**
	 * Return the published slideshows.
	 * @return array
	 */
	public function published()
	{
		return SlideshowModel::published();
	}
}