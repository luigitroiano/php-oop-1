<!-- Istruzioni:
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
Per chi non ha fantasia ecco qualche entitá che potete usare:
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc. -->
<?php
/** classe Cane
 * definire una classe per un cane
 * @author Gigi <email@email.com>
 * @copyright 2021 Gigi
 */

class Cane
{
  public $razza;
  public $peso_medio;
  public $altezza_media;
  public $pelo;
  public $colore;
  public $img;
  public $taglia;
  public $origine;

  public function __construct(string $razza, int $peso_medio, int $altezza_media, string $pelo, string $colore, string $img, string $taglia, string $origine = 'italia')
  {

    $this->razza = $razza;
    $this->peso_medio = $peso_medio;
    $this->altezza_media = $altezza_media;
    $this->pelo = $pelo;
    $this->colore = $colore;
    $this->img = $img;
    $this->taglia = $taglia;
    $this->origine = $origine;
  }

  public function getRazza()
  {
    return $this->razza;
  }

  public function getPesoMedio()
  {
    return $this->peso_medio;
  }

  public function getAltezzaMedia()
  {
    return $this->altezza_media;
  }

  public function getPelo()
  {
    return $this->pelo;
  }

  public function getColore()
  {
    return $this->colore;
  }

  public function getImg()
  {
    return $this->img;
  }

  public function getTaglia()
  {
    return $this->taglia;
  }

  public function getOrigine()
  {
    return $this->origine;
  }
}
//creo un' istanza per ogni cane
$bolognese = new Cane('Bolognese', 3, 28, 'lungo', 'bianco', 'https://www.enci.it/media/3337/bologneseideal.jpg?width=555', 'piccola');
$bracco_italiano = new Cane('Bracco Italiano', 30, 60, 'corto', 'bianco/marrone', 'https://www.enci.it/media/3076/soggetto-manfroni.jpg?width=555', 'media');
$corso = new Cane('Cane Corso', 45, 65, 'corto', 'nero/marrone/grigio', 'https://www.enci.it/media/3078/principessa.jpg?width=238px&height=306px', 'media');
$pastore_bergamasco = new Cane('Pastore Bergamasco', 32, 58, 'lungo', 'nero/marrone', 'https://www.enci.it/media/3099/berg_dsc2278-copia.jpg', 'media');
$pastore_maremmano = new Cane('Pastore Maremmano', 40, 65, 'lungo', 'bianco', 'https://www.enci.it/media/3309/damasco-di-selvaspina-1-year-old.jpg?width=555', 'media');
$cirneco = new Cane("cirneco dell'etna", 10, 48, "corto", "marrone", "https://www.enci.it/media/3041/guillermo-026.jpg?width=555", "media");
$lagotto = new Cane("Lagotto Romagnolo", 15, 45, "lungo", "marrone", "https://www.enci.it/media/3108/lagotto-foto-maurizio-marcelli.jpeg?width=555", "media");
$maltese = new Cane("Maltese", 4, 23, "lungo", "bianco", "https://www.enci.it/media/3335/malteseideal.jpg?width=555", "piccola");
$mastino_napoletano = new Cane("Mastino Napoletano", 60, 70, "corto", "nero", "https://www.enci.it/media/3114/dsc00765.jpg?width=536px&height=378px", "grande");
// $segugio_appennino = new
// $segugio1 = new
// $segugio2 = new
// $segugio_maremmano = new
// $spinone = new
// $volpino = new

//array associativo
$listaCani = [$bolognese, $bracco_italiano, $corso, $pastore_bergamasco, $pastore_maremmano, $cirneco, $lagotto, $maltese, $mastino_napoletano];
//var_dump($listaCani);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>

<body>
  <h1 style="text-align: center;">Cani Italiani</h1>
  <div style="display: flex; flex-wrap: wrap; margin:0 auto; width: 80%;">
    <?php foreach ($listaCani as $cane) { ?>
      <div style="width: 50%;">
        <ul>
          <li>
            <h2><?php echo $cane->getRazza(); ?></h2>
            <ul>
              <li>
                <h4>Peso medio: <?php echo $cane->getPesoMedio(); ?> kg</h4>
              </li>
              <li>
                <h4>Altezza media: <?php echo $cane->getAltezzaMedia(); ?> cm</h4>
              </li>
              <li>
                <h4>Pelo: <?php echo $cane->getPesoMedio(); ?> kg</h4>
              </li>
              <li>
                <h4>Colore: <?php echo $cane->getColore(); ?> kg</h4>
              </li>
              <li>
                <h4>Taglia: <?php echo $cane->getTaglia(); ?> kg</h4>
              </li>
              <li>
                <h4>Origine: <?php echo $cane->getOrigine(); ?> kg</h4>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div style="width: 50%; display: flex; justify-content: center;">
        <img style="height: 300px; padding: 50px 0" src="<?php echo $cane->getImg(); ?>" alt="">
      </div>
    <?php } ?>
  </div>
</body>

</html>