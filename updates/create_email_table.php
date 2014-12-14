<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Emails\Updates
 */

namespace AxC\DataManagement\Updates;

use AxC\Framework\Helpers\Schema as SchemaHelper;

/**
 * Create the Email DB scheme.
 */
class CreateEmailTable extends \October\Rain\Database\Updates\Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		\Schema::dropIfExists('axc_data_management_email');
		\Schema::create('axc_data_management_email', function($table)
		{
			SchemaHelper::init($table);
			$table->string('type')->unique()->index();
			$table->string('address')->unique();
			SchemaHelper::addBoolean($table, 'principal');
			SchemaHelper::addPosition($table);
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
		\Schema::dropIfExists('axc_data_management_email');
	}
}