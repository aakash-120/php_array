<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

<?php
$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
        );


echo "<table><tr><th>category</th><th>subcategory</th><th>ID</th><th>Name</th><th>BRAND</th></tr>";

        foreach($products as $k1 => $v1)
        {
           // echo $k1.": ";        //main array
         foreach($v1 as $k2 => $v2)
         {
           // echo $k2."<tr>";       //electronic television
        
            foreach($v2 as $k3 => $v3)
            {      
              echo "<tr><td>$k1</td>";        
                                  //id name brand         
              echo "<td>$k2</td>";
           
               foreach($v3 as $k4 => $v4)
               {
                 echo "<td>$v4</td>";                     
               }               
               echo "</tr>";
         }
     }
    }
       
     echo "</table>";


echo "<br><br><br>";


echo "<table><tr><th>category</th><th>subcategory</th><th>ID</th><th>Name</th><th>BRAND</th></tr>";

        foreach($products as $k1 => $v1)
        {
         foreach($v1 as $k2 => $v2)
         {
           if($k2 == "Mobile") 
            { 
              foreach($v2 as $k3 => $v3)
              {      
                echo "<tr><td>$k1</td>";                       
                echo "<td>$k2</td>";           
                foreach($v3 as $k4 => $v4)
                {
                  echo "<td>$v4</td>";                     
                }               
                echo "</tr>";
              }
          }
     }
    }
       
     echo "</table>";


echo "<br><br><br>";



       
?>

</body>
</html>