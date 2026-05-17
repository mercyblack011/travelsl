<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define costs per day for different districts
    $district_costs = [
        "Ampara" => 4000,
        "Anuradhapura" => 4500,
        "Badulla" => 4200,
        "Batticaloa" => 4100,
        "Colombo" => 5000,
        "Galle" => 4800,
        "Gampaha" => 4900,
        "Hambantota" => 4300,
        "Jaffna" => 4600,
        "Kalutara" => 4700,
        "Kandy" => 4700,
        "Kegalle" => 4500,
        "Kilinochchi" => 4300,
        "Kurunegala" => 4600,
        "Mannar" => 4100,
        "Matale" => 4600,
        "Matara" => 4700,
        "Monaragala" => 4400,
        "Mullaitivu" => 4200,
        "Nuwara Eliya" => 4500,
        "Polonnaruwa" => 4300,
        "Puttalam" => 4400,
        "Ratnapura" => 4700,
        "Trincomalee" => 4100,
        "Vavuniya" => 4200,
        // Add more districts and respective costs as needed
    ];

    // Define hotel costs per night
    $hotel_costs = [
        "Budget" => 2000,  // Cost per night in LKR
        "Mid-range" => 5000,
        "Luxury" => 10000,
    ];

    // Get form inputs
    $home_district = $_POST['home_district'] ?? '';
    $destination_district = $_POST['destination_district'] ?? '';
    $days = $_POST['days'] ?? '';
    $hotel_type = $_POST['hotel_type'] ?? '';
    $num_persons = $_POST['num_persons'] ?? '';

    // Proceed with calculation if there are no errors
    if (empty($errors)) {
        // Calculate total budget
        if (array_key_exists($home_district, $district_costs) && array_key_exists($destination_district, $district_costs) && array_key_exists($hotel_type, $hotel_costs)) {
            $transportation_cost = abs($district_costs[$destination_district] - $district_costs[$home_district]) * $days * $num_persons;
            $hotel_cost = $hotel_costs[$hotel_type] * $days;
            $food_cost = 1500 * $days * $num_persons;  // Assuming 1500 LKR per person per day for food
            $total_cost = $transportation_cost + $hotel_cost + $food_cost;

            echo "Your Cost Rs. $total_cost /-";
        } else {
            echo "Invalid inputs try again.";
        }
    }
}

// Display errors next to input fields in the HTML form
if (!empty($errors)) {
    foreach ($errors as $key => $error) {
        echo "<p class='error'>$error</p>";
        // You can also highlight the input field that has an error
        echo "<script>document.getElementById('$key').classList.add('error-field');</script>";
    }
}
?>
