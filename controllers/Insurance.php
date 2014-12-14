<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * Insurance Backend controller.
 */
class Insurance extends \Backend\Classes\Controller
{
	/**
	 * Controller extensions.
	 * @var array
	 */
	public $implement = [
		'AxC.Framework.Behaviors.BackendController',
		'AxC.Framework.Behaviors.BackendAssetController',
		'AxC.Framework.Behaviors.ReportWidgetController'
	];

	/**
	 * Index action.
	 * @return null
	 */
	public function index()
	{
		$this->pageTitle = trans('axc.datamanagement::lang.insurance.label.singular');
		\AxC\DataManagement\ReportWidgets\Base::create($this, '\AxC\DataManagement\Models\InsuranceCompany');
		\AxC\DataManagement\ReportWidgets\Base::create($this, '\AxC\DataManagement\Models\InsuranceContent');
	}
}