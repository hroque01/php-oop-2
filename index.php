<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Products
    {
        public $animal;
        public $price;

        public function __construct($animal, $price)
        {
            $this->animal = $animal;
            $this->price = $price;
        }

        public function getHTML()
        {
            return "<h3>Animale: " . $this->animal . "<br>"
                . "Prezzo: " . $this->price . "</br>";
        }

    }
    class Kennels extends Products
    {
        public $materials;
        public $size;


        public function __construct($animal, $price, $materials, $size)
        {

            parent::__construct($animal, $price);

            $this->materials = $materials;
            $this->size = $size;

        }

        public function getKennelsHTML()
        {
            return parent::getHTML()
                . $this->getKennels();
        }

        public function getKennels()
        {
            return "Materiale: " . $this->materials . "<br>"
                . "Taglia: " . $this->size . "</h3>";
        }

    }

    class Food extends Products
    {
        public $type;
        public $expiration;

        public function __construct($animal, $price, $type, $expiration)
        {
            parent::__construct($animal, $price);

            $this->type = $type;
            $this->expiration = $expiration;

        }

        public function getFoodHTML()
        {
            return parent::getHTML()
                . $this->getFoodType();
        }

        public function getFoodType()
        {
            return "Tipo di cibo: " . $this->type . "<br>"
                . "Scadenza: " . $this->expiration . "</h3>";
        }
    }

    // Kennels print in html
    $kennelDog = new Kennels("Cane", "120 EUR", "Plastica", "XXL");
    $kennelCat = new Kennels("Gatto", "30 EUR", "Stoffa", null);

    // Food print in html
    $foodDog = new Food("Cane", "3.99 EUR", "Pate di pollo e riso", "04-07-2024");
    $foodCat = new Food("Cat", "4.99 EUR", "Crocchetta di carne di coniglio", "25-05-23")


        ?>
    <div class="container">
        <div class="row  d-flex align-items-center" style="gap: 30px;">
            <div class="card" style="width: 30%;">
                <h1> Cuccia per cani </h1>

                <!-- Kennel for dog -->
                <span>
                    <?php echo $kennelDog->getKennelsHTML(); ?>
                </span>
            </div>
            <div class="card" style="width: 30%;">
                <h1> Cuccia per gatti </h1>

                <!-- Kennel for cat -->
                <span>
                    <?php echo $kennelCat->getKennelsHTML(); ?>
                </span>
            </div>
        </div>
        <div class="row  d-flex align-items-center my-5" style="gap: 30px;">
            <div class="card" style="width: 30%;">
                <h1> Cibo per cani </h1>

                <!-- Kennel for dog -->
                <span>
                    <?php echo $foodDog->getFoodHTML(); ?>
                </span>
            </div>
            <div class="card" style="width: 30%;">
                <h1> Cibo per gatti </h1>

                <!-- Kennel for cat -->
                <span>
                    <?php echo $foodCat->getFoodHTML(); ?>
                </span>
            </div>
        </div>
    </div>


</body>

</html>