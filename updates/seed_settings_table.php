<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\DataManagement\Updates
 */

namespace AxC\DataManagement\Updates;

use Seeder;
use AxC\DataManagement\Models\Settings;

/**
 * Add data to DataManagement Settings DB scheme.
 */
class SeedSettingsTable extends Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('link_image_width', 120);
		Settings::set('link_image_height', 120);

		Settings::set('slideshow_image_width', 2000);
		Settings::set('slideshow_image_height', 500);

		Settings::set('insurance_company_image_width', 180);
		Settings::set('insurance_company_image_height', 180);
	}
}