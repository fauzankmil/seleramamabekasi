<!DOCTYPE php, name : index.php>


<html>
    <head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selera Mama Bekasi</title></head>
    
    <body>
        <link rel="stylesheet" type="text/css" href="css/tampilan.css">
        <div class="header">            
            <?php include"page/header.html"?></div>
          
        <div id="navbar">
            <?php include"page/menu.html"?></div>
              
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <?php include"page/paging.php"?>
                    
                </div>
        </div>
        
        <div class="rightcolumn">
                    <div class="card">
                        <?php include"page/about.html"?>
                    </div>
                    <div class="card maps">
                        <?php include"page/lokasi.html"?>
                        
                    </div>
                    <div class="card social">
                        <h2>Our Social Media</h2>
                        <?php include"page/socialmedia.html"?>
                    </div>
                 </div>
        <div class="footer">
            <?php include"page/footer.html"?>
        </div>
                <script src="js/aksi.js"></script>
    </body>
 </html>