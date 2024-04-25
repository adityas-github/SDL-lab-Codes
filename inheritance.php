<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        html{
            background-image: url('https://source.unsplash.com/1600x900/?abstract');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 100px;
            box-sizing: border-box;
        }
                 
        input[type="submit"] {
            background-image: linear-gradient(to right, #FF512F 0%, #F09819  51%, #FF512F  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
          input[type="submit"] {
    margin-top: 20px; /* Adjust margin to create space between inputs and button */
    background-image: linear-gradient(to right, #FF512F 0%, #F09819  51%, #FF512F  100%);
    padding: 15px 45px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
    margin-left: auto; /* Adjust to center the button horizontally */
    margin-right: auto; /* Adjust to center the button horizontally */
}

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Shape Area Calculator</h2>

    <form method="post" action="">
        <input type="radio" name="shape" value="triangle"> Triangle
        <input type="radio" name="shape" value="square"> Square
        <input type="radio" name="shape" value="circle"> Circle
        <br><br>
        <div id="dimensionInputs">
            
        </div>
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <div class="result">
        <?php
        // Define a parent class Shape
        class Shape {
            // Common properties and methods for all shapes can go here
            protected $name;

            public function __construct($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }

            public function calculateArea() {
                // Abstract method for calculating area, to be implemented in child classes
            }
        }

        // Define child class Triangle
        class Triangle extends Shape {
            private $base;
            private $height;

            public function __construct($base, $height) {
                parent::__construct("Triangle");
                $this->base = $base;
                $this->height = $height;
            }

            public function calculateArea() {
                return 0.5 * $this->base * $this->height;
            }
        }

        // Define child class Square
        class Square extends Shape {
            private $side;

            public function __construct($side) {
                parent::__construct("Square");
                $this->side = $side;
            }

            public function calculateArea() {
                return $this->side * $this->side;
            }
        }

        // Define child class Circle
        class Circle extends Shape {
            private $radius;

            public function __construct($radius) {
                parent::__construct("Circle");
                $this->radius = $radius;
            }

            public function calculateArea() {
                return pi() * $this->radius * $this->radius;
            }
        }

        // Handle form submission
        if (isset($_POST['submit'])) {
            if (isset($_POST['shape'])) {
                $selectedShape = $_POST['shape'];
                
                switch ($selectedShape) {
                    case 'triangle':
                        $base = $_POST['base'];
                        $height = $_POST['height'];
                        $triangle = new Triangle($base, $height);
                        echo "Area of " . $triangle->getName() . ": " . $triangle->calculateArea();
                        break;
                    case 'square':
                        $side = $_POST['side'];
                        $square = new Square($side);
                        echo "Area of " . $square->getName() . ": " . $square->calculateArea();
                        break;
                    case 'circle':
                        $radius = $_POST['radius'];
                        $circle = new Circle($radius);
                        echo "Area of " . $circle->getName() . ": " . $circle->calculateArea();
                        break;
                    default:
                        echo "Please select a shape.";
                }
            } else {
                echo "Please select a shape.";
            }
        }
        ?>
    </div>
</div>

<script>
    // Function to dynamically change input fields based on selected shape
    var radioButtons = document.querySelectorAll('input[name="shape"]');
    var dimensionInputs = document.getElementById("dimensionInputs");

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            dimensionInputs.innerHTML = ""; // Clear previous inputs

            switch (this.value) {
                case "triangle":
                    dimensionInputs.innerHTML = `
                        Base: <input type="text" name="base" required>
                        Height: <input type="text" name="height" required>`;
                    break;
                case "square":
                    dimensionInputs.innerHTML = `
                        Side: <input type="text" name="side" required>`;
                    break;
                case "circle":
                    dimensionInputs.innerHTML = `
                        Radius: <input type="text" name="radius" required>`;
                    break;
            }
        });
    });
</script>

</body>
</html>
