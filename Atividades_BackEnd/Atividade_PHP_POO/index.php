<?php

    class Person {

        // Atributos, propriedades, características.
        private $name;
        private $age;

        // Construtor.
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Métodos.
        public function set_name($name) {
            $this->name = $name;
        }

        public function get_name() {
            return $this->name;
        }

        public function set_age($age) {
            $this->age = $age;
        }

        public function get_age() {
            return $this->age;
        }

        function info() {
            return "Nome: " . $this->name . " (Idade: " . $this->age . " )";
        }
    }

    class Shop extends Person {

        private $payment;

        public function set_payment($value) {
            $this->payment = $value;
        }

        public function get_payment() {
            return $this->payment;
        }

        public function info() {
            return parent::info() . " Pagamento: R$ " . number_format("$this->payment", 2, ",", ".");
        }
    }

    // Objeto
    $person1 = new Person("Fulano de Tal", 15);
    $person2 = new Person("Alguém", 68);

    $person3 = new Shop("Outro alguém", 21);
    $person3->set_age(42);
    $person3->set_payment(0.5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo $person1->info() . "<br>";
        echo $person2->info() . "<br>";
        echo $person3->info() . "<br>";
    ?>

</body>
</html>