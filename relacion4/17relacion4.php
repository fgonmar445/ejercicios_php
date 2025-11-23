<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    trait Andaluz
    {
        public function saludar()
        {
            print "Que pasa";
        }

        public function despedir()
        {
            print "Ta luego";
        }
    }

    trait Vasco
    {
        public function saludar()
        {
            print "Kaixo";
        }

        public function despedir()
        {
            print "Agur";
        }
    }

    class Persona {
        use Andaluz, Vasco {
            Andaluz::saludar insteadof Vasco; //Preferimos el metodo saludar de andaluz
            Vasco::despedir insteadof Andaluz; //Preferimos el metodo saludar de andaluz
            Andaluz::despedir as decirAdios; //Creamos un alias para el metodo despedir de Andaluz
           // Andaluz::despedir as private; //Cambiamos visibilidad del metodo despedir, genera error xq despedir es privado
        }
    }

    $person = new Persona();
    $person->saludar(); //Que pasa
    $person->despedir(); //Agur
    $person->decirAdios(); //Ta luego
    ?>
</body>

</html>