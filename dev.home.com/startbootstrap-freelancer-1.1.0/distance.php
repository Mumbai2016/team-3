<?php
    	  require 'databasecheck.php';
        $address1=$_POST['address'];
        $mentor_match='';
        $mentor_id='';
        //echo $address1;
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        $url .= $address1;
        $url = str_replace(' ', '+', $url);
        $url = $url . '&' . 'key=AIzaSyBdoXqr8xr3ojbCoE7XU8deF2UCl7VpCUU';
        $response = file_get_contents($url);
        $response = json_decode($response, true);
        //print_r($response);
        $latitude1 = $response['results'][0]['geometry']['location']['lat'];
        $longitude1 = $response['results'][0]['geometry']['location']['lng'];
        //echo $latitude1 . '<br>';
        //echo $longitude1 . '<br>';
        //Checking nearest mentors

          $res=mysqli_query($con,"Select * from mentor_basic") ;
          if(!$res){die('Error' . mysqli_error($con));}
          $check_user = mysqli_num_rows($res);
          $i=0;
          while($row = mysqli_fetch_array($res)) {
          $address2=$row['mtr_address'];
          $url1 = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
          $url1 .= $address2;
          $url1 = str_replace(' ', '+', $url1);
          $url1 = $url1 . '&' . 'key=AIzaSyBdoXqr8xr3ojbCoE7XU8deF2UCl7VpCUU';
          $response = file_get_contents($url1);
          $response = json_decode($response, true);
          //print_r($response);
          $latitude2 = $response['results'][0]['geometry']['location']['lat'];
          $longitude2 = $response['results'][0]['geometry']['location']['lng'];
          //echo $latitude2 . '<br>';
          //echo $longitude2 . '<br>';
          
          $theta = $longitude1 - $longitude2;
          $dist = sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)) +  cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $km = $dist * 60 * 1.1515 * 1.609344;
          $km=round($km);
          if($km<=22)
          {
          if($i!=0)
          {  
          $mentor_match.=','.$km;
          $mentor_id.=','.$row['mtr_id'];
        }
        else
        {
         $mentor_match=$km;
         $mentor_id=$row['mtr_id'];
         $i++; 
          }
        }
        }
        $redir = 'http://localhost/team-3/dev.home.com/startbootstrap-freelancer-1.1.0/mentor_map.php?distance='. $mentor_match . '&mentor_id='. $mentor_id;
        header('Location:'.$redir);

      
  ?>
