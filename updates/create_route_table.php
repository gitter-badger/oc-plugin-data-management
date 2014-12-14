<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Routes\Updates
 */

namespace AxC\DataManagement\Updates;

use AxC\Framework\Helpers\Schema as SchemaHelper;

/**
 * Create the Route DB scheme.
 */
class CreateRouteTable extends \October\Rain\Database\Updates\Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		\Schema::dropIfExists('axc_data_management_route');
		\Schema::create('axc_data_management_route', function($table)
		{
			SchemaHelper::init($table);
			$table->string('path')->unique();
			$table->string('language');
			$table->foreign('language')->references('code')->on('rainlab_translate_locales');
			$table->string('page');
			SchemaHelper::addPublished($table);
			SchemaHelper::addChangedAt($table);
			SchemaHelper::addChangedBy($table);
			SchemaHelper::avoidDelete($table);
		});
	}

	/**
	 * Delete the DB scheme.
	 * @return null;
	 */
	public function down()
	{
		\Schema::dropIfExists('axc_data_management_route');
	}
}