<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form{
            display: flex;
        }
    </style>
    <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINICHAT</title>
</head>
<body>
<h1 class="text-center">Minichat</h1>
<div class="row">
<?php 
    for($i = 0; $i < count($data) - 1; $i++){
        ?>
         <p><strong><?php echo htmlspecialchars($data[$i]['nickname']); ?> </strong> : <?php echo htmlspecialchars($data[$i]['message']); ?></p> -->
        <?
    }    
?>
</div>
<form class="row g-3 align-items-end" action="../../controllers/minichat/index.php" method="post">
    <div class="col-auto">
        <label for="nickname" class="visually-hidden">
            Pseudo :
        </label>
        <input readonly class="form-control-plaintext" type="text" id="nickname" name="nickname" value="<?php echo (!empty($_SESSION['nickname'])) ? $_SESSION['nickname'] : ''; ?>">
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="message"> foreach ($data as $datum){
        echo '<p><strong>' . htmlspecialchars($datum['nickname']) . '</strong> : ' . htmlspecialchars($datum['message']) . '</p>';
    }
            Message :            
        </label>  
        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
    </div><br>
    <div class="col-auto">
        <input type="submit" class="btn btn-primary mb-3"value="Poster">
    </div>
</form>
</body>
</html>