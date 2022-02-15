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

echo "1 List all products in this format:<br>";
echo "<table><tr><th>category</th><th>subcategory</th><th>ID</th><th>Name</th><th>BRAND</th></tr>";
foreach($products as $k1 => $v1)
{
foreach($v1 as $k2 => $v2)
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
     echo "</table>";
echo "<br><br><br>";

echo "2. List all products in Mobile subcategory in same format as in point 1.<br>";
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


echo "3. List all products with their id, name, subcategory and category with brand name = Samsung like this:<br>";

foreach($products as $cat => $category)
{
  foreach($category as $subcat => $subcategory)
  {
    foreach($subcategory as $val => $value)
    {
      if($value['brand'] == 'Samsung')
      {
        echo('Product ID:'.$value['id']."<br>");
        echo('Product NAME:'.$value['name']."<br>");
        echo('subcategory:'.$subcat."<br>");
        echo('category:'.$cat."<br>");
        echo("<br>");
      }
    }
  }
}

function delete(){
  global $products;
  foreach($products as $key1 => $cat)
{
  foreach($cat as $subkey2 => $sub)
  {
      foreach($sub as $subkey3 => $item){
          if($item["id"]=="PR003"){
             unset($products[$key1][$subkey2][$subkey3]);
          }
      }
  }
}

echo "4. Delete product with id = PR003.<br>";
echo "<table>";
  echo "<tr><th>Category</th><th>Sub Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
  foreach($products as $key => $categories)
  {
      foreach($categories as $key2 => $sub)
      {
          foreach($sub as $key3 => $item)
          {
            echo "<tr><td>$key</td><<td>$key2</td><td>$item[id]</td><td>$item[name]</td><td>$item[brand]</td>";
          }
      }
  }
  echo "</table>";
}

delete();


function display(){
  global $products;

echo"<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th><tr>";
  foreach($products as $k1=>$v1){
      foreach($v1 as $k2=>$v2){         
          foreach($v2 as $i ){

              echo"<tr><td>".$k1."</td>".
             " <td>".$k2."</td>".
              "<td>".$i["id"]."</td>".
              "<td>".$i["name"]."</td>".
              "<td>".$i["brand"]."</td></tr>";
             }
            }
  }
 
}  
  echo"</table>";
echo "<br><br>";

echo "5. Update product name = BIG-555 with id = PR002.<br>";
function update()
{
  $a = "PR002";
  global $products;
  foreach($products as $k1=>$value1)
  {
      foreach($value1 as $subCat=>$val)
      {
          foreach($val as $v1=>$ab)
          {
              if($ab["id"]==$a){
                $products[$k1][$subCat][$v1]["name"]="BIG-555";        
              }             
          }       
      }
  }
display();
}


update();
       
?>

</body>
</html>