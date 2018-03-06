// Instantiate the Choreo, using a previously instantiated Temboo_Session object, eg:
// $session = new Temboo_Session('accountName', 'myFirstApp', 'abc123xxxxxxxxxxxxxx');

$geocodeByAddress = new Google_Geocoding_GeocodeByAddress($session);

// Get an input object for the Choreo
$geocodeByAddressInputs = $geocodeByAddress->newInputs();

// Set inputs
$geocodeByAddressInputs->setAddress("yourValueHere");

// Execute Choreo and get results
$geocodeByAddressResults = $geocodeByAddress->execute($geocodeByAddressInputs)->getResults();