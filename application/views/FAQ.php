<title> AAUE :: Torneio do Reitor - FAQ </title>
<body>
  <div class="container" >
    <div class="panel-group" id="accordion" >
      <div class="panel panel-faq">

       <?php
       $i=0;
       foreach($row as $row):
        $i++; ?>
      <div class="panel-heading" >
        <h4 class="panel-title" >
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" >
          <p> FAQ# <?=$i?> <?php print_r( $row['questao'] ); ?> </p> </a>
        </h4>
      </div>
      <div id="collapse<?=$i?>" class="panel-collapse collapse">
        <div class="panel-body"><?php print_r( $row['resposta'] ); ?></div>
      </div>
    <?php endforeach; ?>

  </div>
</div>
</div>