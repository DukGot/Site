<?php
	require_once("db.php");
	$link = db_content();

	function new_goods($link, $name, $title, $price, $category, $color, $image)
    {
        $title = trim($title);
        $name = trim($name);
        $category = trim($category);
        $color = trim($color);

        if ($title == '')
            return false;

        $t = "INSERT INTO goods (name, title, price, category, color, img) VALUES ('%s','%s', '%s', '%s', '%s', '%s')";

        $query = sprintf($t, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $price), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $color), mysqli_real_escape_string($link, $image));

        $result = mysqli_query($link, $query);
        var_dump($query);

        return true; 
    }

	if(!empty($_POST))
        {
            $name = $_FILES['img']['name']; #получаю картінку
            $tmp_name = $_FILES['img']['tmp_name'];

            move_uploaded_file($tmp_name, 'img/'.$name); #
            $image = "img/".$name;
			
			$sName = strtoupper ($_POST['name']);
            
            new_goods($link, $sName, $_POST['title'], $_POST['price'], $_POST['category'], $_POST['color'], $image);
            
        }
?>