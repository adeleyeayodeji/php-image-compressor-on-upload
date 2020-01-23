<?php
	//Compressing image on the go with PHP
	//Compress on the go
        function compressImageonthego($source, $quality) {
        	//Getting image info
            $info = getimagesize($source);
            //Getting image extension
            $fullparth = $source;
			$imagepart = explode("https://result.maxfemcollege.com.ng/images/",$fullparth);
			//print_r ($imagepart);

			$rewriteimg = explode(".",$imagepart[1]);
			//print_r($rewriteimg);
            
            //Writting new file name
            $newname = "temp".rand(10,100);
            //If image is jpeg by info
            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);
            //If image is gif by info
            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);
            //If image is png by info
            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);
            //Upload in a new location or override current
           if(imagejpeg($image, "images/".$rewriteimg[0].".".$rewriteimg[1] ,$quality)){
	            //Error new url
	           echo "images/".$rewriteimg[0].".".$rewriteimg[1];
       		}
        }
        if (isset($_GET["imageurl"])) {
            $imageurl = $_GET["imageurl"];
        }
        compressImageonthego($imageurl, 20);
?>