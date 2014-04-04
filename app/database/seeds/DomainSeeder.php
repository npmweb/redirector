<?php

use \NpmWeb\Redirector\Models\Domain;

class DomainSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('domains')->delete();

		$domain = new Domain();
		$domain->fill([
			'name' => 'redirect.northpoint.org',
			'redirect_url' => 'http://northpoint.org',
			'status' => 302,
		]);
		$domain->save();
		var_dump($domain->errors()->all());
	}

}