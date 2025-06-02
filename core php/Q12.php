<!-- Restaurant Food Category Program: Use a switch case to display the category(Starter/Main Course/Dessert) and dish based on user selection -->

<?php 

$Selection_dish = 2; 

echo "Select a dish by number:<br>";
echo "1. Spring Rolls: <br>";
echo "2. panajabi sak: <br>";
echo "3. Chocolate Cake: <br>";
echo "4. Caesar Salad: <br>  ";
echo "5. Butter nane: <br>";
echo "6. Ice Cream Sundae: <br>";
echo "Your selection: ". $Selection_dish . "<br>";

switch ($Selection_dish) {
    case 1:
        echo "Category: Starter <br>";
        echo "Dish: Spring Rolls <br>";
        break;
    case 2:
        echo "Category: Main Course <br>";
        echo "Dish: panajabi sak <br>";
        break;
    case 3:
        echo "Category: Dessert <br>";
        echo "Dish: Chocolate Cake <br>";
        break;
    case 4:
        echo "Category: Starter <br>";
        echo "Dish: Caesar Salad <br>";
        break;
    case 5:
        echo "Category: Main Course <br>";
        echo "Dish: Butter nane <br>";
        break;
    case 6:
        echo "Category: Dessert <br>";
        echo "Dish: Ice Cream Sundae <br>";
        break;
    default:
        echo "Invalid selection. Please choose a valid dish number <br>";
        break;
}







?>