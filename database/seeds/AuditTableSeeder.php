<?php

use App\Models\Audit;
use Illuminate\Database\Seeder;

class AuditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $audit=Audit::create([
        	'title' =>'Audit Énergétique',
        	'description'=>'<p class="text-justify">Que ce soit en entreprise ou dans les maisons (habitations), comment réduire les charges et faire des économies reste une question cruciale. </p>
			<p class="text-justify">Surtout dans les PME/ PMI pour rester compétitives, plusieurs stratégies sont adoptées que ce soit par la réduisions des charges salariales, réduction stratégique de la marge bénéficiaire ou autre astuces, mais la plus grande action, aux résultats incontournables reste une utilisation rationnelle et efficace de l’énergie électrique. </p>
			<p class="text-justify">Nous accompagnons des entreprises et particuliers sur la voie de la maitrise de ce facteur capital de développement des entreprises en mettant à leur disposition notre service d’audit énergétique.</p>'
        ]);

        $imgs=[
        	[
        		'path'=>'images/home/audit-1.png',
        		'title'=>'Faire un état des lieux de la performance énergétique de votre bâtiment',
        		'description'=>''
        	],
        	[
        		'path'=>'images/home/audit-2.png',
        		'title'=>'Identifier les défis des installations',
        		'description'=>''
        	],
        	[
        		'path'=>'images/home/audit-3.png',
        		'title'=>'Planifier les actions à mener',
        		'description'=>''
        	],
        	[
        		'path'=>'images/home/audit-4.png',
        		'title'=>'Faire un devis des investissements à faire',
        		'description' =>''
        	],

        ];

        $audit->images()->createMany($imgs);

    }
}
