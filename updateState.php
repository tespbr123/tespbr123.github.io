<?php
// Get the 'led' parameter from the URL (either 'on' or 'off')
$ledState = isset($_GET['led']) ? $_GET['led'] : 'off';

// Define the path to the data.json file
$file = 'data.json';

// Get the current contents of data.json
$data = json_decode(file_get_contents($file), true);

// Update the 'led' state
$data['led'] = $ledState;

// Save the updated contents back to data.json
file_put_contents($file, json_encode($data));

echo 'OK';
?>
