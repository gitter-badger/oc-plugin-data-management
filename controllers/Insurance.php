<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * Insurance controller.
 */
class Insurance extends \AxC\Framework\Controllers\Page
{
	/**
	 * To manage the controller report widgets.
	 */
	use \AxC\Framework\Traits\ReportWidgetManager;

	/**
	 * Set the page title and add the report widgets.
	 */
	protected function _initPage()
	{
		$this->pageTitle = trans('axc.datamanagement::lang.insurance.label.singular');
		\AxC\DataManagement\ReportWidgets\Base::create($this, '\AxC\DataManagement\Models\InsuranceCompany');
		\AxC\DataManagement\ReportWidgets\Base::create($this, '\AxC\DataManagement\Models\InsuranceContent');
	}

	/**
	 * Index action.
	 * @return null
	 */
	public function index()
	{
		// do nothing
	}
}