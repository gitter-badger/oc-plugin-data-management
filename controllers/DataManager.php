<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * DataManager controller (like \AxC\Framework\Controllers\DataManager with the report widget).
 */
abstract class DataManager extends \AxC\Framework\Controllers\DataManager
{
	/**
	 * Add the report widget.
	 */
	public function __construct()
	{
		parent::__construct();
		\AxC\DataManagement\ReportWidgets\Base::create($this);
	}
}