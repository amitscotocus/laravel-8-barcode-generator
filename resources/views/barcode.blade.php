<!DOCTYPE html>
<html>
   <head>
      <title>Barcode Generator In Laravel 8 </title>
      <!-- CSS only -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- Js only -->
   </head>
   <body>
      <div class="container">
         <div class="jumbotron">
            <div class="container text-center">
               <h2> 
                  Barcode Generator In Laravel 8
               </h2>
            </div>
         </div>
         <div class="container text-center d-flex align-items-center justify-content-center">
            <h3>Product 2: MAC-1200</h3>
            @php
                $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
            @endphp
            <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('MAC-1200', $generatorPNG::TYPE_CODE_128)) }}">
         </div>
    </div>
   </body>
</html>