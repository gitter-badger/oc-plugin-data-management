<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * Home Backend controller.
 */
class Home extends \Backend\Classes\Controller
{
	/**
	 * Controller extensions.
	 * @var array
	 */
	public $implement = [
		'AxC.Framework.Behaviors.BackendController',
		'AxC.Framework.Behaviors.BackendAssetController'
	];

	/**
	 * Index action.
	 * @return null
	 */
	public function index()
	{
		$this->pageTitle = trans('axc.datamanagement::lang.settings.label');
		$this->addJs('/plugins/axc/datamanagement/assets/dist/home.js', 'core');
		$this->addCss('/plugins/axc/datamanagement/assets/dist/home.css', 'core');
		$navigation = \System\Classes\PluginManager::instance()->findByIdentifier('AxC.DataManagement')->registerNavigation();
		array_shift( $navigation['data-management']['sideMenu'] );
		$this->vars['tile_bg'] = ['', 'cyan', 'darkRed', 'green', 'orange', 'darkPink', 'amber', 'darkCobalt', 'lightGreen', 'darkCyan'];
		$this->vars['tile_size'] = ['', 'double-vertical', 'quadro', 'double', '', 'double', '', 'double', '', ''];
		$this->vars['parts'] = $navigation['data-management']['sideMenu'];
		$this->vars['index'] = 1;
	}
}