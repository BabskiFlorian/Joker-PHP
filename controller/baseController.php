<?php
    # initialiser des données sans html
    const title = "Le Joker";
    $date = date('d-m-Y');
    $_dates = new DateTime();
    $lang = ["fr","en"];
    $navigator = $_SERVER["HTTP_USER_AGENT"];

    # autres chose
    class User{
        public function actorsInfo(){
            $actors = [
                array(
                    "prenom"=>"Joaquin",
                    "nom"=>"Phoenix",
                    "role"=>"dans le rôle d'Arthur Fleck (Joker)"
                ),
                array(
                    "prenom"=>"Robert",
                    "nom"=>"De Niro",
                    "role"=>"dans le rôle de Murray Franklin"
                ),
                array(
                    "prenom"=>"Zazie",
                    "nom"=>"Beetz",
                    "role"=>"dans le rôle de Sophie Dumond"
                ),
                array(
                    "prenom"=>"Frances",
                    "nom"=>"Conroy",
                    "role"=>"dans le rôle de Penny Fleck"
                ),
                
            ];
        
        return $actors;
    }

    static function storyline(){
        $story = array("title" => "Histoire du filme :",
                "résumé" => "En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
                après une série de tragédies et d'humiliations. Incapable de se connecter aux
                autres et désespéré par l'absence de sens dans sa vie, Arthur se transforme
                progressivement en Joker, une figure de chaos et de violence, qui devient 
                une icône pour les citoyens les plus marginalisés.");
        return $story;
} }   ?>