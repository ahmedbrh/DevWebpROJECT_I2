
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Public/Accueil/css/Accueil_content.css" rel="stylesheet" type="text/css" />
<link href="Public/Search/css/style.css"  rel="stylesheet"  type="text/css" />
<!--     
<Script src="Public\Search\scripts\index.js"></Script>
    -->
   
</head>
<body>
    
<!-- popup -->
 <div  class="overlay">
        
        </div>
        <div class="popup">
     <?php include "View/Popup/popup.php" ?>
     </div>
   

<!-- popup -->
<!-- Section Search book ! -->
<div class="search">
<div class="row mt-5" id="Search-bar">
  <div class="col-md-6 m-auto">
    
      <h1 class="text-center mb-4" id="title">
      Search a book here 
      </h1>
<!-- Search bar -->

        <div class="form-group">
        
          <input
            type="text"
            id="search"
            name="search"
            class="form-control"
            placeholder="Ex: JavaScript , Machine learning , Python programming...!"

      
          />
        
 <button class="btn btn-dark" id="enter">Search</button>
    </div>
             
  
</div>
</div>
<div id="book-list"></div><br><br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Public\Search\scripts\searchApi.js"></script>

</body>
