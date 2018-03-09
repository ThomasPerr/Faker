<?php
namespace DTA\Faker\Provider;

class Pokemon extends \Faker\Provider\Base {
    
    protected static $pokemon = array(
        'Pikachu',
        'Bulbizarre',
        'Salameche',
        'Carapuce',
        'Kicklee',
        'Tygnon',
        'Alakazam',
        'Arcanin',
        'Canarticho',
        'Florizarre',
        'Dracofeu',
        'Tortank'
    );
    
    public function pokemon(){
        return static::randomElement(static::$pokemon);
    }
}