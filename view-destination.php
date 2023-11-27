<!DOCTYPE html>
<html>
<head>
    <title>Trip Planner</title>
</head>
<body>
    <h1>Choose Your Destination</h1>
    <ul>
        <?php
        // Array of destinations with weather and special notes
        $destinations = array(
            array(
                'name' => 'Paris',
                'weather' => 'Mild and rainy',
                'notes' => 'Famous for the Eiffel Tower and Louvre Museum.'
            ),
            array(
                'name' => 'Tokyo',
                'weather' => 'Moderate with occasional showers',
                'notes' => 'Known for its rich culture, technology, and delicious cuisine.'
            ),
            array(
                'name' => 'New York City',
                'weather' => 'Varies, can be cold in winter',
                'notes' => 'The city that never sleeps, with iconic landmarks like Times Square and Central Park.'
            )
            // Add more destinations as needed
        );

        // Loop through destinations to display them
        foreach ($destinations as $destination) {
            echo "<li>";
            echo "<strong>{$destination['name']}</strong>: Weather - {$destination['weather']}. Special Notes - {$destination['notes']}";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>
