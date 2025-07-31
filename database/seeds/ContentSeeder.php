<?php

use App\Models\About;
use App\Models\Article;
use App\Models\Audit;
use App\Models\Info;
use App\Models\Offre;
use App\Models\Partenaire;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $slides=collect([]);

        $slides->push([
        	'sub_title' =>"La puissance du soleil chez vous",
        	'title' =>"LIFTING ENERGY ACCESS CHALLENGES",
        	// 'image' =>'images/home/slide-2.png'
        ]);
        $slides->push([
        	// 'sub_title' =>"La puissance du soleil chez vous",
        	'title' =>"L'ÉLECTRICITÉ PARTOUT",
        	// 'image' =>'images/home/slide-5.png'
        ]);
        $slides->push([
        	// 'sub_title' =>"La puissance du soleil chez vous",
        	'title' =>"EXPERTISE EN ÉNERGIE SUR RÉSEAU",
        	// 'image' =>'images/home/slide-7.png'
        ]);
        $slides->push([
        	// 'sub_title' =>"La puissance du soleil chez vous",
        	'title' =>"L'ÉNERGIE JUSTE ET EFFICACE",
        	// 'image' =>'images/home/slide-7.png'
        ]);

        $img=[
        	['path'=>'images/home/slide-2.png'],
        	['path' =>'images/home/slide-9.png'],
        	['path' =>'images/home/slide-5.png'],
        	['path' =>'images/home/slide-7.png']
        ];
        foreach ($slides as $key => $slide) {
        	
        	$slide=Slide::create($slide);
        	// dd($slide);
        	$slide->image()->create($img[$key]);
        }

        $apropos=route('a-propos');
        $about=About::create([
        	'type'=>'accueil',
        	'description' =>"<p class=\"text-justify\">Expert en dimensionnement et l’installation technique des systèmes photovoltaïques et leader dans le domaine de l’efficacité énergétique, nous croyons en la richesse infinie des sources d’énergies renouvelables pour un développement durable et la protection de notre planète.</p>
                            <p class=\"text-center\"><a href=\"$apropos\" class=\"theme-button-one\">Découvrez-nous</a></p>",
        	// 'image' =>'images/home/1.jpg'
        ]);
        $about->image()->create(['path' =>'images/home/1.jpg']);

        $about=About::create([
        	'type'=>'about',
        	'description' =>"<p class=\"text-justify\">UP COMPANY est une société spécialisée dans la fourniture et l’installation d’équipement solaire et de matériel électrique au Benin. Raccorder les millions de population africaine rurale et péri urbaine, isolée du réseau électrique est notre objectif. Qu’il s’agisse de la distribution de kits et systèmes solaires domestiques, la construction des centrales solaires, de production autonome, hybride ou pouvant être raccordé au réseau électrique, nous travaillons principalement dans l’électrification hors réseau et sur réseau.</p>
                <p class=\"text-justify\">Notre équipe constituée d’experts internationaux ainsi que d’ingénieurs et techniciens locaux assure un résultat irréprochable et une qualité de travail respectant les normes régionales et internationales.</p>",
        	// 'image' =>'images/home/1.jpg'
        ]);
        $about->image()->create(['path' =>'images/home/1.jpg']);

        $about=About::create([
        	'type'=>'about',
        	'description' =>'<p class=\"text-justify\"><strong><span class="text-orange"><i style="padding-right: 10px;">UP COMPANY </i></span></strong> fait partie des 8 sociétés de fourniture de service énergétique sélectionnées par l’initiative WEE (Women Entrepreneurship Energy) dans la catégorie WEE-S du MCA II entendu Millenium Challenge Account qui vise à renforcer les femmes Chef d’entreprise en énergie.</p>
				<p class="text-justify">Particuliers, entreprises publiques et privées fini les factures d’électricité trop chères, optez pour des installations solaires et maitrisez à présent vos coûts.  Faites-nous confiance pour tous vos projets photovoltaïques.</p>
				<p style="font-weight: bold;"><i class="text-orange">Bienvenu dans notre univers. Notre richesse vient du haut,le soleil.<br> Nous sommes UP COMPANY.</i></p>',
        	// 'image' =>'images/home/about.png'
        ]);
        $about->image()->create(['path' =>'images/home/about.png']);


        $services=collect([]);
        $imgs=[
        	[
        		['path' =>"images/portfolio/t-1.png","type" =>'illustration','description' =>'','title' =>''],
                ['path' =>"images/portfolio/t-2.png","type" =>'illustration','description' =>'','title' =>'']

            ],
            [
        		['path' =>"images/portfolio/1.jpg","type" =>'illustration','description' =>'','title' =>''],
                // ['path' =>"images/portfolio/2.jpg","type" =>'illustration','description' =>'','title' =>''],
                ['path' =>"images/portfolio/3.jpg","type" =>'illustration','description' =>'','title' =>'']

            ],
            [
        		['path' =>"images/portfolio/1.png","type" =>'illustration','description' =>'','title' =>''],
                ['path' =>"images/portfolio/2.png","type" =>'illustration','description' =>'','title' =>''],
                // ['path' =>"images/portfolio/3.jpg","type" =>'illustration','description' =>'','title' =>'']

            ],

        ];
        $services->push([
        	'title' =>' Système Autonome hybride ou raccorde',
        	'type' =>'autonome',
        	'description'=>"<p class=\"text-justify\">Nous faisons le dimensionnement et l’installation de type varié de système photovoltaïque avec des techniques idéales qui convertissent de façon optimale le rendement du rayonnement solaire sur les panneaux photovoltaïques. A l’endroit du secteur public nous proposons une production autonome ou hybride d’électricité pour réduire de façon substantielle leurs lourdes factures d’électricités.</p>
            <p class=\"text-justify\">Nous construisons également des centrales photovoltaïques de production autonome, hybride ou pouvant être raccordé au réseau électrique. Notre équipe constituée d’ingénieurs locaux et d’experts internationaux ayant de l’expérience partout sur le continent africain et ailleurs assurent une expertise impeccable de la phase de conception du projet jusqu’à la réception des travaux.</p>",

            /*'images' =>json_encode([
            	['image'=>'images/portfolio/t-1.png', 'title' =>'Business Meeting','desc' =>'Explore strange new worlds'],
            	['image'=>'images/portfolio/t-2.png','title' =>'Business Meeting','desc' =>'Explore strange new worlds'],

            ]),*/
            'icon' =>'images/icon/icon-1.png',
            'short_description' =>"Nous faisons la conception d’installation qui convertisse de façon optimal le rendement du rayonnement solaire sur les panneaux photovoltaïques."

        ]);

		$services->push([
        	'title' =>'Photovoltaïque PME/PMI',
        	'type' =>'pme',
        	'description'=>"<p class=\"text-justify\">L’enjeu des petites et moyennes entreprises dans le secteur des industries, de la transformation ou de la vente de produits et de services est elles font généralement face à des consommations électriques élevées en fonction de beaucoup de facteur. Nous mettons en place une installation de production de l’électricités tout en générant des économies très important sur leur facture d’électricités.  Ces solutions que nous proposons selon le modèle choisi par nos clients sont hybride ou totalement autonome en productions de l’électricité.Et leurs résultats rentabilisent les couts de production et contribuent de façon significative à la compétitivité des entreprises sur le marché. </p>
                <p class=\"text-justify\">Maximisez vos revenus tout en minimisant vos coûts !!!</p>",

            /*'images' =>json_encode([
            	['image'=>'images/portfolio/1.jpg', 'title' =>'Business Meeting','desc' =>'Explore strange new worlds'],
            	['image'=>'images/portfolio/2.jpg','title' =>'Business Meeting','desc' =>'Explore strange new worlds'],
            	['image'=>'images/portfolio/3.jpg', 'title' =>'Business Meeting','desc' =>'Explore strange new worlds']
            ]),*/
            'icon' =>'images/icon/icon-2.png',
            'short_description' =>"Nous mettons en place une installation de production de l’électricités tout en générant des économies très importantes sur vos factures d’électricités favorisant ainsi votre compétitivité sur le marché."
        ]);

		$services->push([
        	'title' =>'Photovoltaïque exploitations Agricole',
        	'type' =>'exploitations',
        	'description'=>"<p class=\"text-justify\">L’agriculture est un secteur clé de la croissance économique de notre pays et créateur d’emploi en milieu rurale et péri-urbain. Nous proposons une agriculture utilisant les sources d’énergies renouvelables avec une autonomisation de la production électrique et des systèmes d’irrigations utilisant l’énergie solaire, face à l’un des enjeux de développement de ce secteur qui est l’accès à l’énergie rentable et moins coûteux.</p>
                <p class=\"text-justify\">En dehors des exploitations agricoles, nous faisons des travaux d’eau avec systèmes de pompage solaire pour nos clients particuliers, pouvoir public central et décentralisé ainsi que les entreprises privées et coopératives agricoles.</p>",

            /*'images' =>json_encode([
            	['image'=>'images/portfolio/1.jpg', 'title' =>'Business Meeting','desc' =>'Explore strange new worlds'],
            	['image'=>'images/portfolio/2.jpg','title' =>'Business Meeting','desc' =>'Explore strange new worlds'],
            	['image'=>'images/portfolio/3.jpg', 'title' =>'Business Meeting','desc' =>'Explore strange new worlds']
            ]),*/
            'icon' =>'images/icon/icon-3.png',
            'short_description' =>"Des sources d’énergies renouvelables dans le secteur agricole avec une autonomisation de la production électrique et des systèmes d’irrigation utilisant l’énergie solaire."
        ]);

		foreach ($services as $key => $service) {
			$service=Service::create($service);
			$service->images()->createMany($imgs[$key]);

		}

		$offres=collect([]);
		$img=[
        	['path' =>'images/home/rurale.png'],
        	['path'=>'images/home/led.png'],
        	['path' =>'images/home/kit.png'],
        ];

        $offres->push([
        	'title' =>'Électrification Rurale',
        	'type' =>'rurale',
        	'description' =>'<p class="text-justify">L’accès à l’électricité est au cœur du développement des nations, favorise l’essor des entreprises, fait fonctionner les services essentiels comme les infrastructures communautaires les centres de santés les écoles etc… attire des investissements crée des emplois et contribue à l’essor de toute une économie.</p>
                <p class="text-justify">UP COMPANY s’investit dans l’électrification rurale car nous croyons que la problématique de l’accès à l’électricité particulièrement en milieu rurale ne se limite pas seulement au simple fait d’apporter de l’électricité aux populations rurales mais va bien au-delà. Elle consiste à booster le développement socioéconomique d’une localité, d’un territoire grâce à l’arrivée de l’électricité, nous implémentons des projets d’électrification rurale à travers lesquels nous développons un ensemble d’action permettant la création d’activités productives locales, la création de nouvelles activités consommatrices d’électricité (moulin à mais, bar et restaurant, coopérative de production agricole) entrainant la création d’emploi local.</p>
                <p class="text-justify">L’électricité au coeur du développement !!!</p>'
        ]);

        $offres->push([
        	'title' =>'Éclairage LED',
        	'type' =>'eclairage-led',
        	'description' =>'<p class="text-justify">Nous mettons à dispositions de notre clientèle toutes une gamme d’équipements électriques, de basse consommation et aussi des Lampes LED économique en consommation et moins énergivores que celle des technologies classiques. Nous vous proposons de remplacer vos points lumineux par les lampes LED professionnel, pour réduire de manière très significative la consommation énergétique donc les factures d’électricité tout en maintenant ou améliorant la qualité des points lumineux qui donnent des résultats très satisfaisants.</p>
                <p class="text-justify">Nous associons chacune de vos actions aux notre afin de réduire notre impact sur l’environnement et laisser une planète meilleure à la génération future.</p>
                <p class="text-justify">Cette démarche est aussi écologique qu’économique  !!</p>'
        ]);

        $offres->push([
        	'title' =>'Kits Solaires et SSD',
        	'type' =>'kit-solaire',
        	'description' =>'<p class="text-justify">Une des missions de notre société est d’apporter de l’électricité aux populations rurales et péri-urbaines, non desservies par le réseau électrique central actuel, de proposer des solutions autonomes d’électrification et d’éduquer la population a une utilisation rationnelle de l’énergie. Nous accordons un intérêt particulier au femmes et surtout celles rurales, dans le développement des modèles de solution d’énergie solaire visant à leur assuré une meilleure condition de vie.</p>
                <p class="text-justify">Dans ces localités rurales nous commercialisons une gamme variée de kits solaire et des Systèmes Solaires Domestiques(SSD) de différentes puissances selon les besoins de ces ménages. Conscient du faible pouvoir d’achat des populations de ces localités, nous offrons des modes de payement comme le pays as you go pour permettre une accessibilité équitable de tous à nos produits. </p>
                <p class="text-justify">L’électricité dans tous les ménages !!!</p>'
        ]);

        foreach ($offres as $key => $offre) {
        	$offre=Offre::create($offre);
			$offre->image()->create($img[$key]);
        }

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


		$produits=collect([]);
		$img=[
        	['path'=>'images/shop/1.png'],
        	['path' =>'images/shop/2.png'],
        	['path' =>'images/shop/3.png'],
        	['path' =>'images/shop/4.png'],
        	['path' =>'images/shop/5.png'],
        	['path' =>'images/shop/6.png'],
        	['path' =>'images/shop/7.png'],
        	['path' =>'images/shop/8.png'],
        	['path' =>'images/shop/9.png']
        ];
		
		$produits->push([
			'name' =>"Lampadaires",
			"price" =>"$32.70",
			"description"=>"",
			// 'image' =>"images/shop/1.png"
		]);
		
		$produits->push([
			'name' =>"Batteries",
			"price" =>"$47.70",
			"description"=>"",
			// 'image' =>"images/shop/2.png"
		]);

		$produits->push([
			'name' =>"Panneaux solaire",
			"price" =>"$26.00",
			"description"=>"",
			// 'image' =>"images/shop/3.png"
		]);

		$produits->push([
			'name' =>"Lampes LED",
			"price" =>"$46.00",
			"description"=>"",
			// 'image' =>"images/shop/4.png"
		]);

		/*$produits->push([
			'name' =>"Panneaux solaire",
			"price" =>"$36.75",
			"description"=>"",
			// 'image' =>"images/shop/5.png"
		]);

		$produits->push([
			'name' =>"Lampadaires",
			"price" =>"$41.10",
			"description"=>"",
			// 'image' =>"images/shop/6.png"
		]);

		$produits->push([
			'name' =>"Lampadaires",
			"price" =>"$36.25",
			"description"=>"",
			// 'image' =>"images/shop/7.png"
		]);

		$produits->push([
			'name' =>"Panneaux solaire",
			"price" =>"$38.00",
			"description"=>"",
			// 'image' =>"images/shop/8.png"
		]);

		$produits->push([
			'name' =>"Panneaux solaire",
			"price" =>"$26.15",
			"description"=>"",
			// 'image' =>"images/shop/9.png"
		]);*/


		foreach ($produits as $key => $produit) {
			
			$produit=Produit::create($produit);
			$produit->image()->create($img[$key]);
		}

		$articles=collect([]);
		$img=[
			['path' =>'images/home/17.jpg'],
			['path' =>'images/home/18.jpg'],
			['path' =>'images/home/19.jpg'],
		];
		$articles->push([
			'title' =>'Challenging Staff',
			'short_description' =>'The Love Boat soon will be making other run plore strange tools.',
			'description' =>'',
			// 'intro_image' =>'images/home/17.jpg',
			// 'full_image' =>''
		]);


		$articles->push([
			'title' =>'Integrity Properties',
			'short_description' =>'The Love Boat soon will be making other run plore strange tools.',
			'description' =>'',
			// 'intro_image' =>'images/home/18.jpg',
			// 'full_image' =>''
		]);

		$articles->push([
			'title' =>'Innovation Solutions',
			'short_description' =>'The Love Boat soon will be making other run plore strange tools.',
			'description' =>'',
			// 'intro_image' =>'images/home/19.jpg',
			// 'full_image' =>''
		]);


		foreach ($articles as $key=> $article) {
			$article=Article::create($article);
			$article->image()->create($img[$key]);
		}

		$partenaires=collect([]);
		$img=[
			['path' =>'images/logo/energie4impact.png'],
			['path' =>'images/logo/logo-mca-mcc.png'],
			['path' =>'images/logo/p-3.png'],
			['path' =>'images/logo/p-4.png'],
			['path' =>'images/logo/p-5.png']
		];

		$partenaires->push([
			'name' =>'Energy4impact',
			// 'logo' =>'images/logo/p-1.png',
			'link' =>'https://www.energy4impact.org/'
		]);

		$partenaires->push([
			'name' =>'MCA',
			// 'logo' =>'images/logo/p-2.png',
			'link' =>'https://mcabenin2.bj/'
		]);
        /*
		$partenaires->push([
			'name' =>'partenaire 3',
			// 'logo' =>'images/logo/p-3.png',
			'link' =>'#'
		]);

		$partenaires->push([
			'name' =>'partenaire 4',
			// 'logo' =>'images/logo/p-4.png',
			'link' =>'#'
		]);

		$partenaires->push([
			'name' =>'partenaire 5',
			// 'logo' =>'images/logo/p-5.png',
			'link' =>'#'
		]);*/

		foreach ($partenaires as $key => $partenaire) {
			
			$p=Partenaire::create($partenaire);
			$p->image()->create($img[$key]);
		}

        Info::create([
            'adresse' =>'Aidjèdo Rue 701, Cotonou Bénin <br>Avenue de la libération',
            'telephone'=>'+229 69778989',
            'email'=>'contact@upcompany.co',
            'description' =>'Nous recevons particuliers, entreprises et les accompagnons dans le conseil en vue d’adoption des mesures d’efficacités énergétiques qui impactent de façon durable leurs actions d’économies d’énergies.'
        ]);
    }
}
