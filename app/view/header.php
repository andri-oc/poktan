
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kelompok Tani</title>
        <link rel="stylesheet" href="app/lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="app/lib/css/sweetalert.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="app/lib/css/index.css">
        <script type="text/javascript" src="app/lib/js/jquery.min.js"></script>
      </head>
    
      <body onload="menuSamping()">
        <div>
          <div class="sidebar p-4 bg-success menu" id="sidebar">
            <img src="./app/lib/img/logo.png" width="150" alt="">
            <h4 class="mb-5 text-white">HOLTIKULTURA</h4>        
            <li>
              <a class="text-white" href="./poktan">
                <i class="bi bi-book mr-2"></i>
                Kelompok Tani
              </a>
            </li>
            <li>
              <a class="text-white" href="./benih">
                <i class="bi bi-flower1 mr-2"></i>
                Bantuan Benih
              </a>
            </li>
            <li>
              <a class="text-white" href="./pupuk">
                <i class="bi bi-inboxes-fill mr-2"></i>
                Bantuan Pupuk
              </a>
            </li>
            <li>
              <a class="text-white" href="./tunai">
                <i class="bi bi-stickies-fill mr-2"></i>
                Bantuan Tunai
              </a>
            </li>
          </div>
        </div>
        <div class="p-4" id="main-content">
          <button class="btn btn-success" id="btn-toggle" onclick="menuSamping()">
            <i class="bi bi-list"></i>
          </button>&nbsp;&nbsp;
          
          <div class="card mt-5">
            <div class="card-body">
              