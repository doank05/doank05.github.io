<?php
$source = 'https://63183c13f6b281877c66937c.mockapi.io/sapa/';
$konten = file_get_contents($source);
$datas = json_decode($konten, true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Pe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <?php 
      $save;
      $tanggal = date('d');
            foreach($datas as $data){
              if($data['id'] == $tanggal){
                $save = $data;
              }

            }
        ?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center">NOVITA's PEMBERITAHUAN</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th class="text-center">
                Pesan Dari Dicky Ada gak Ya ?
            </th>
          </tr>
          
          <tr>
            <th class="text-center">
              <form method="POST">
                <button type="submit" name="btn_req" value="btn_req" class="btn btn-primary">Request Gak Nih!</button>
              </form>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>

  <div class="output">
    <h3 class="text-center">
    <?php 
        if(isset($_POST['btn_req'])) {
          print_r($save['kalimat']);
        }
        ?>
      </h3>
  </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>