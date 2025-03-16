<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    
    $xmlFilePath = __DIR__ . '/conf.xml'; 

    
    $config = simplexml_load_file($xmlFilePath);
   
    
    $mainColor = $config->mainColor;
    $footerColor = $config->footerColor;

    echo "<p>Main Color: <span style='color:$mainColor'>$mainColor</span></p>";
    echo "<p>Footer Color: <span style='color:$footerColor'>$footerColor</span></p>";

   
    $config->mainColor = '#0000ff'; 
    $config->footerColor = '#ff00ff'; 

    
    ?>
</body>
</html>