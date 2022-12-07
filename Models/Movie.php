<?php

/** Your class description 
 *  defines Movie class
 * @author Chiara Meringola
 */

class Movie
{
    public $title;
    public $director;
    public $year;
    public $maiCharacter;

    /**
     * Description
     * @param {String} $title Titolo del film
     * @param {String} $director Direttore del film
     * @param {String} $year Anno uscita film
     * @param {String} $maiCharacter Personaggio principale
     * @author Chiara Meringola
     * */
    function __construct(String $title, String $director, String $year, String $maiCharacter)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->mainCharacter = $maiCharacter;
    }

    /**
     * Description 
     * @returns {String} Stampa tutti i dati dei movies
     * @author Chiara Meringola
     **/
    public function print()
    {
        return "Title: $this->title, Director: $this->director, Year of release: $this->year, Main Character: $this->mainCharacter";
    }
}
