<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('curl');
     
		
		// Optional, delete this line if your API is open
		
	
		
		$city='Chittagong';
		$url = 'http://digitalmanush.com/apis/web/area.php?city='.$city;
		
        



		$contents = file_get_contents($url); 

$results = json_decode($contents,true); 
$final =array_values($results);
function array_values_recursive($array) {
    $temp = array();
    foreach ($array as $key => $value) {
        if (is_numeric($key)) {
            $temp[] = is_array($value) ? array_values_recursive($value) : $value;
        } else {
            $temp[$key] = is_array($value) ? array_values_recursive($value) : $value;
        }
    }
    print_r($temp);
}

$hello = implode(', ', array_map(function ($entry) {
	return $entry['Area'];
  }, $results));

echo $hello;












$post = [
    'Name' => 'saimon',
    'Mobile' => 'azad',
	'Gmail'   => 'azadcseaust@gmail.com',
	'CurrentGeoLocation' => '51515',
    'BloodGroup' => 'A+',
	'City'   => 'Dhaka',
	'Area' => 'gulshan',
    'GmailPhotolink' => 'asfasfaf',
    'NotificationID'   => '6565',
];

$ch = curl_init('http://digitalmanush.com/apis/web/signup.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
var_dump($response);




















$getloc = json_decode(file_get_contents("http://ipinfo.io/"));

echo $getloc->city;



 
		$this->load->model('queries');
		$posts = $this->queries->getPosts();

		$this->load->view('welcome_message', ['posts'=>$posts]);
	}
}
