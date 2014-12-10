<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\DataManagement\Updates
 */

namespace AxC\DataManagement\Updates;

use Seeder;
use AxC\DataManagement\Models\Abbreviation;

/**
 * Add data to Abbreviation DB scheme.
 */
class SeedAbbreviationTable extends Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Abbreviation::create( [
			'code' => 'irap',
			'acronym' => 'IRAP',
			'meaning' => 'Imposta regionale sulle attività produttive',
			'published' => true, 
		] );

		Abbreviation::create( [
			'code' => 'caf',
			'acronym' => 'CAF',
			'meaning' => 'Centro Assistenza Fiscale',
			'published' => true, 
		] );

		Abbreviation::create( [
			'code' => 'rui',
			'acronym' => 'RUI',
			'meaning' => 'Registro Unico degli Intermediari',
			'published' => true, 
		] );

		Abbreviation::create( [
			'code' => 'vat',
			'acronym' => 'IVA',
			'meaning' => 'Imposta sul valore aggiunto',
			'published' => true, 
		] );
	}
}