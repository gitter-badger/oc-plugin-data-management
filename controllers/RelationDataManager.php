<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace AxC\DataManagement\Controllers;

/**
 * RelationDataManager controller  (like \AxC\Framework\Controllers\RelationDataManager with the relation and the report widget).
 */
abstract class RelationDataManager extends \AxC\Framework\Controllers\RelationDataManager
{
	/**
	 * Relation child name.
	 * @var string
	 */
	public $relationName = 'items';

	/**
	 * Add the report widget.
	 */
	public function __construct()
	{
		parent::__construct();
		\AxC\DataManagement\ReportWidgets\Base::create($this);
	}
}