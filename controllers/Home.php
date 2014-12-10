<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * Home controller.
 */
class Home extends \AxC\Framework\Controllers\Page
{
	/**
	 * Set the page title and add the CSS resources.
	 * @return null
	 */
	protected function _initPage()
	{
		$this->pageTitle = trans('axc.datamanagement::lang.settings.label');
		$this->addCss('/plugins/axc/DataManagement/assets/css/home.css');
	}

	/**
	 * Index action.
	 * @return null
	 */
	public function index()
	{
		$navigation = \System\Classes\PluginManager::instance()->findByIdentifier('AxC.DataManagement')->registerNavigation();
		array_shift( $navigation['data-management']['sideMenu'] );
		$this->vars['parts'] = $navigation['data-management']['sideMenu'];
		$this->vars['index'] = 1;
	}
}