<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Components
 */

namespace AxC\DataManagement\Components;

use AxC\DataManagement\Models\InsuranceCompany;
use AxC\DataManagement\Models\InsuranceContent;

/**
 * Insurance component class.
 */
class Insurance extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.datamanagement::lang.insurance.component.name'),
			'description'	=> trans('axc.datamanagement::lang.insurance.component.description')
		];
	}

	/**
	 * Return the published insurance companies.
	 * @return array
	 */
	public function company()
	{
		return InsuranceCompany::published();
	}

	/**
	 * Return the published insurance content.
	 * @return array
	 */
	public function content()
	{
		return InsuranceContent::published();
	}
}