<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Updates
 */

namespace AxC\DataManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use AxC\Framework\Helpers\Schema as SchemaHelper;

/**
 * Create the Link DB scheme.
 */
class CreateInsuranceContentItemTable extends Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		Schema::dropIfExists('axc_data_management_insurance_content_item');
		Schema::create('axc_data_management_insurance_content_item', function($table)
		{
			SchemaHelper::init($table);
			$table->string('value')->index();
			SchemaHelper::foreign($table, 'insurance_content', 'data_management');
			SchemaHelper::addPositionNotUnique($table);
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
		Schema::drop('axc_data_management_insurance_content_item');
	}
}