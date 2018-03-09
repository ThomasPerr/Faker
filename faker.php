<?php
require_once 'vendor/autoload.php';
require_once 'src/domain/Pokemon.php'; // pour faker1
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance);
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('fr_FR');

// generate data by accessing properties

echo $faker->name,"</br>";
// 'Lucy Cechtelar';
echo $faker->address, "</br>";
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $faker->text, "</br></br>";
// Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
// et sit et mollitia sed.
// Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
// sit minima sint.


$faker1 = new Faker\Generator();
$faker1->addProvider(new DTA\Faker\Provider\Pokemon($faker1));

for ($i=0; $i < 6; $i++) {
    echo $faker1->Pokemon, "</br>";
}