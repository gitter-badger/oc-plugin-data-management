<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Links\Updates
 */

namespace AxC\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use AxC\Framework\Helpers\Schema as SchemaHelper;

/**
 * Create the Link DB scheme.
 */
class CreateLinkTable extends Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		Schema::dropIfExists('axc_data_management_link');
		Schema::create('axc_data_management_link', function($table)
		{
			SchemaHelper::init($table);
			$table->string('title')->unique()->index();
			$table->text('url')->unique()->index();
			$table->text('description')->unique();
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
		Schema::drop('axc_data_management_link');
	}
}