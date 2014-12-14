<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Abbreviations\Updates
 */

namespace AxC\DataManagement\Updates;

use AxC\Framework\Helpers\Schema as SchemaHelper;

/**
 * Create the Abbreviation DB scheme.
 */
class CreateAbbreviationTable extends \October\Rain\Database\Updates\Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		\Schema::dropIfExists('axc_data_management_abbreviation');
		\Schema::create('axc_data_management_abbreviation', function($table)
		{
			SchemaHelper::init($table);
			$table->string('code')->unique()->index();
			$table->string('acronym')->unique()->index();
			$table->string('meaning')->unique();
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
		\Schema::dropIfExists('axc_data_management_abbreviation');
	}
}