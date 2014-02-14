<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$rightnow = date("Y-m-d H:i:s");

		User::create(
			array(
			'login' => 'richard',
			'email' => 'richard@mashica.org',
			'password' => Hash::make('mashica2'),
			'name' => 'Richard',
			'lastname1' => 'Stoutner',
			'lastname2' => '',
			'email2' => 'richard@mashica.com',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1969-01-04',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow,
		));

		User::create(
			array(
			'login' => 'maritza',
			'email' => 'maritza@mashica.com',
			'password' => Hash::make('zacarracatelas'),
			'name' => 'Maritza',
			'lastname1' => 'Acevedo',
			'lastname2' => 'Melo',
			'email2' => 'maritza@mashica.com',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1969-06-22',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'marcello',
			'email' => 'marcello@spr-msh.com',
			'password' => Hash::make('spr-msh'),
			'name' => 'Marcello',
			'lastname1' => 'Conta',
			'lastname2' => '',
			'email2' => 'marcello@mashica.com',
			'address' => '',
			'colonia' => '',
			'city' => 'Madrid',
			'state' => 'Madrid',
			'country' => 'ES',
			'birthday' => '1972-06-20',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'agomez',
			'email' => 'agomez_ruiz@hotmail.com',
			'password' => Hash::make('agomez'),
			'name' => 'Alejandro',
			'lastname1' => 'Gómez',
			'lastname2' => 'Ruiz',
			'email2' => 'agomezruiz@gmail.com',
			'address' => '',
			'colonia' => '',
			'city' => 'Huayapan',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1975-09-17',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'anavigu',
			'email' => 'anavigu@hotmail.com',
			'password' => Hash::make('anavigu'),
			'name' => 'Ana Victoria',
			'lastname1' => 'Gutierrez',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1975-09-17',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'porrasarenas',
			'email' => 'porrasarenas@hotmail.com',
			'password' => Hash::make('porrasarenas'),
			'name' => 'Cástulo',
			'lastname1' => 'Arenas',
			'lastname2' => 'Porras',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1983-09-04',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'boccaletti',
			'email' => 'boccaletti@prodigy.net.mx',
			'password' => Hash::make('boccaletti'),
			'name' => 'Christian',
			'lastname1' => 'Boccaletti',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1975-09-08',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'smorenoxbox',
			'email' => 'smorenoxbox@hotmail.com',
			'password' => Hash::make('smorenoxbox'),
			'name' => 'Santiago',
			'lastname1' => 'Moreno',
			'lastname2' => 'Fuertes',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1996-12-26',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'ackot',
			'email' => 'guad_sex@hotmail.com',
			'password' => Hash::make('ackot'),
			'name' => 'David',
			'lastname1' => 'Gómez',
			'lastname2' => 'López',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1995-11-16',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'doraluz',
			'email' => 'doraluzl@gmail.com',
			'password' => Hash::make('doraluz'),
			'name' => 'Dora Luz',
			'lastname1' => 'Linares',
			'lastname2' => 'Martinez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1972-10-06',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'tati',
			'email' => 'erikagonzalezsantos@yahoo.com',
			'password' => Hash::make('tati'),
			'name' => 'Erika',
			'lastname1' => 'Gonzalez',
			'lastname2' => 'Santos',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1974-11-26',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'hugofelix',
			'email' => 'hugofelix2006@gmail.com',
			'password' => Hash::make('hugofelix'),
			'name' => 'Hugo',
			'lastname1' => 'Félix',
			'lastname2' => 'Clamaco',
			'email2' => 'hugofelix@yahoo.com',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1968-08-25',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'cheltv',
			'email' => 'cheltv@hotmail.com',
			'password' => Hash::make('cheltv'),
			'name' => 'Itzel',
			'lastname1' => 'Tenorio',
			'lastname2' => 'Vasconcelos',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1960-11-08',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'javier.rodriguez',
			'email' => 'javier.rodriguez066@gmail.com',
			'password' => Hash::make('javier.rodriguez'),
			'name' => 'Javier',
			'lastname1' => 'Rodríguez',
			'lastname2' => 'Rivera',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1966-05-10',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'jaroche',
			'email' => 'jaroche@fusioncorporativa.com',
			'password' => Hash::make('jaroche'),
			'name' => 'Jorge',
			'lastname1' => 'Aroche',
			'lastname2' => 'Tarasco',
			'email2' => 'jlat007@hotmail.com',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1982-08-20',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'spindolajorge',
			'email' => 'spindolajorge@gmail.com',
			'password' => Hash::make('spindolajorge'),
			'name' => 'Jorge',
			'lastname1' => 'Spindola',
			'lastname2' => 'Morales',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1983-05-21',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'juliomayoral',
			'email' => 'anime_julio@hotmail.es',
			'password' => Hash::make('juliomayoral'),
			'name' => 'Julio',
			'lastname1' => 'Mayoral',
			'lastname2' => 'Miranda',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1996-11-01',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'lorcha',
			'email' => 'lorcha2000@hotmail.com',
			'password' => Hash::make('lorcha'),
			'name' => 'Lorena',
			'lastname1' => 'Chagoya',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1981-05-18',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'chnkten',
			'email' => 'chnkten@hotmail.com',
			'password' => Hash::make('chnkten'),
			'name' => 'Luciano',
			'lastname1' => 'Tenorio',
			'lastname2' => 'Vasconcelos',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1972-03-04',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'pepeoso',
			'email' => 'pepeoso69@hotmail.com',
			'password' => Hash::make('pepeoso'),
			'name' => 'José',
			'lastname1' => 'Canseco',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1969-12-18',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'rrossainz',
			'email' => 'rrossainz7@hotmail.com',
			'password' => Hash::make('rrossainz'),
			'name' => 'Rocio',
			'lastname1' => 'Rossainz',
			'lastname2' => 'Montiel',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1977-08-15',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'lucho',
			'email' => 'luchosade@hotmail.com',
			'password' => Hash::make('luchosade'),
			'name' => 'Carlos',
			'lastname1' => 'Suarez',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1978-12-07',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'gabrielmontes',
			'email' => 'gabrielmontesg@gmail.com',
			'password' => Hash::make('gabrielmontes'),
			'name' => 'Gabriel',
			'lastname1' => 'Montes',
			'lastname2' => 'García',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1971-12-01',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'guillecordova',
			'email' => 'guillecordova@yahoo.com.mx',
			'password' => Hash::make('guillecordova'),
			'name' => 'Guillermina',
			'lastname1' => 'Córdova',
			'lastname2' => 'Ruíz',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1964-06-26',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'memoosorio',
			'email' => 'memoosorio@hotmail.com',
			'password' => Hash::make('memoosorio'),
			'name' => 'José Guillermo',
			'lastname1' => 'López',
			'lastname2' => 'Osorio',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1972-04-13',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'joselo',
			'email' => 'joselo29@me.com',
			'password' => Hash::make('joselo'),
			'name' => 'José Luís',
			'lastname1' => 'González',
			'lastname2' => 'Ricárdez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Puebla',
			'state' => 'Puebla',
			'country' => 'MX',
			'birthday' => '1978-11-30',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'juanramon',
			'email' => 'supercuervo69@hotmail.com',
			'password' => Hash::make('juanramon'),
			'name' => 'Juan Ramón',
			'lastname1' => 'Quevedo',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1971-12-02',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'maguilopez',
			'email' => 'magui_lopez72@hotmail.com',
			'password' => Hash::make('maguilopez'),
			'name' => 'Margarita',
			'lastname1' => 'López',
			'lastname2' => 'Reyes',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1972-01-14',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'moises.juarez',
			'email' => 'moises.juarez.rodriguez@gmail.com',
			'password' => Hash::make('moises.juarez'),
			'name' => 'Moisés',
			'lastname1' => 'Juárez',
			'lastname2' => 'Rodríguez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1989-02-06',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'saramiguel',
			'email' => 'saramiguel81@hotmail.com',
			'password' => Hash::make('saramiguel'),
			'name' => 'Sara Miguel',
			'lastname1' => 'Martínez',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Ciudad de México',
			'state' => 'Distrito Federal',
			'country' => 'MX',
			'birthday' => '1981-04-03',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'serafin',
			'email' => 'diazrosario6@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'Serafin',
			'lastname1' => 'Díaz',
			'lastname2' => 'Rosario',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'benyguzman',
			'email' => 'guzman-martinez1210@live.com.mx',
			'password' => Hash::make('Benyboy.13'),
			'name' => 'Benito',
			'lastname1' => 'Guzman',
			'lastname2' => 'Martinez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1991-02-13',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'carlosforgu',
			'email' => 'carlosforgu@gmail.com',
			'password' => Hash::make('forgu'),
			'name' => 'Carlos',
			'lastname1' => 'Fortín',
			'lastname2' => 'Gutiérrez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'carloscruz',
			'email' => 'asdf5@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'Carlos',
			'lastname1' => 'Cruz',
			'lastname2' => 'Salazar',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'felipe123',
			'email' => 'asdf4@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'Felipe',
			'lastname1' => 'Mesinas',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'kevinwilches',
			'email' => 'asdf3@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'Kevin',
			'lastname1' => 'Lopez',
			'lastname2' => 'Wilches',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'ulisesasd',
			'email' => 'asdf2@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'Ulises',
			'lastname1' => 'Lopez',
			'lastname2' => 'Wilches',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'lalocarrasco',
			'email' => 'asdf1@hotmail.com',
			'password' => Hash::make('diazrosario'),
			'name' => 'René Eduardo',
			'lastname1' => 'Carrasco',
			'lastname2' => 'Cruz',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'migueltiktak',
			'email' => 'mpgoaxaca@gmail.com',
			'password' => Hash::make('miguetika'),
			'name' => 'Miguel',
			'lastname1' => 'Pérez',
			'lastname2' => 'García',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1975-10-23',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'manuarrazola',
			'email' => 'dark-curse@hotmail.com',
			'password' => Hash::make('manuarrazola'),
			'name' => 'Manuel',
			'lastname1' => 'Arrazola',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'melida',
			'email' => 'memagaal28@hotmail.com',
			'password' => Hash::make('memagaal28'),
			'name' => 'Mélida del Carmen',
			'lastname1' => 'Magaña',
			'lastname2' => 'Álvarez',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1974-08-28',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'victorcastillejos',
			'email' => 'victorscasti@hotmail.com',
			'password' => Hash::make('victorscasti'),
			'name' => 'Victor Enrique',
			'lastname1' => 'Castillejos',
			'lastname2' => 'Escobar',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'leonardoguadalupe',
			'email' => 'leonardoguadalupe@hotmail.com',
			'password' => Hash::make('leonardoguadalupe'),
			'name' => 'Leonardo Guadalupe',
			'lastname1' => 'Ignacio',
			'lastname2' => '',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'carloshernandezest',
			'email' => 'carloshernandezest@hotmail.com',
			'password' => Hash::make('carloshernandezest'),
			'name' => 'Carlos',
			'lastname1' => 'Hernandez',
			'lastname2' => 'Estrada',
			'email2' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1976-09-19',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));





	}

}