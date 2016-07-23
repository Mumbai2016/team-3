<?php
    	$url = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url .= '203/B,Mary Villa,Jawahar Nagar,Goregaon West,Mumbai';//$address;
        $url = str_replace(' ', '+', $url);
        $url = $url . '&' . 'key=AIzaSyBdoXqr8xr3ojbCoE7XU8deF2UCl7VpCUU';
        $response = file_get_contents($url);
        $response = json_decode($response, true);
        //print_r($response);
        $latitude1 = $response['results'][0]['geometry']['location']['lat'];
        $longitude1 = $response['results'][0]['geometry']['location']['lng'];
        echo $latitude1 . '<br>';
        echo $longitude1 . '<br>';

        $url1 = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url1 .= 'Plot No.U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg, Vile Parle West,Mumbai';//$address2;
        $url1 = str_replace(' ', '+', $url1);
        $url1 = $url1 . '&' . 'key=AIzaSyBdoXqr8xr3ojbCoE7XU8deF2UCl7VpCUU';
        $response = file_get_contents($url1);
        $response = json_decode($response, true);
        //print_r($response);
        $latitude2 = $response['results'][0]['geometry']['location']['lat'];
        $longitude2 = $response['results'][0]['geometry']['location']['lng'];
        echo $latitude2 . '<br>';
        echo $longitude2 . '<br>';
        distance($latitude1,$longitude1,$latitude2,$longitude2);
        function distance($lat1, $lon1, $lat2, $lon2) 
        {

  			$theta = $lon1 - $lon2;
  			$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  			$dist = acos($dist);
  			$dist = rad2deg($dist);
  			$km = $dist * 60 * 1.1515 * 1.609344;
  			echo $km;
  		}	
?>