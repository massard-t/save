<?php
$q=$_GET["q"];
$c = array(
            'administrationservicesgeneraux'      => "http://www.stage.fr/rss/rss.ashx?idFonction=100&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=administration-services-generaux",
            'artsplastiquescinemamusique'         => "http://www.stage.fr/rss/rss.ashx?idSecteur=1&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=arts-plastiques-cinema-musique",
            'conseilaudit'                        => "http://www.stage.fr/rss/rss.ashx?idSecteur=3&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=conseil-audit",
            'constructionbtp'                     => "http://www.stage.fr/rss/rss.ashx?idSecteur=4&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=construction-btp",
            'distributioncommerce'                => "http://www.stage.fr/rss/rss.ashx?idSecteur=5&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=distribution-commerce",
            'energieenvironnement'                => "http://www.stage.fr/rss/rss.ashx?idSecteur=17&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=energie-environnement",
            'immobilier'                          => "http://www.stage.fr/rss/rss.ashx?idSecteur=6&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=immobilier",
            'industriestransport'                 => "http://www.stage.fr/rss/rss.ashx?idSecteur=7&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=industries-transport",
            'informatiquetelecominternet'         => "http://www.stage.fr/rss/rss.ashx?idSecteur=8&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=informatique-telecom-internet",
            'marketing-ommunication'              => "http://www.stage.fr/rss/rss.ashx?idSecteur=9&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=marketing-communication",
            'mediapress'                          => "http://www.stage.fr/rss/rss.ashx?idSecteur=10&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=media-presse",
            'sante-medicalsocialpharmacie'        => "http://www.stage.fr/rss/rss.ashx?idSecteur=11&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=sante-medical-social-pharmacie",
            'servicesalapersonne'                 => "http://www.stage.fr/rss/rss.ashx?idSecteur=12&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=services-a-la-personne",
            'servicesauxentreprisescollectivites' => "http://www.stage.fr/rss/rss.ashx?idSecteur=13&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=services-aux-entreprises-collectivites",
            'servicespublicsadministration'       => "http://www.stage.fr/rss/rss.ashx?idSecteur=14&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=services-publics-administrations",
            'tourismehotellerierestauration'      => "http://www.stage.fr/rss/rss.ashx?idSecteur=15&utm_source=stage&utm_medium=rss&utm_campaign=rss&utm_term=tourisme-restauration-hotellerie");
$xml = $c[$q];
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=10; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
  $item_title = substr($item_title, 0, -2);
  $ele = "<p><h4 class='ui horizontal divider header'>" . $item_title . "</h4><br /><br />" . $item_desc . "</p>";

  $stuff[$item_link] = $ele;
  unset($ele);
}
foreach ($stuff as $key => $value) {
    //echo "Key: $key; <br>Value: $value\n";
    echo "
      <div class='ui segment raised'>
        ". $value ."
        <a class='ui button basic' href='". $key ."'>Visiter</a>
      </div>
      
    ";
}
?> 