<div class="info">
  <div class="central2block">
      <div id="baner1">
          <h1>stats</h1>
          <h4><p> hp:</p>
          <p> acack:<?php ;?></p>
          <p>defens:</p>
          <p>stamina:</p>
          <p>speed:</p>
          <p>inteligent</p></h4>
      </div>
  
      <div id="baner2">
          <h1>Information</h1>
          <h4><p>Name:<?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Name . '</span>';?> </p>
          <p>LV: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->LV . '</span>';?></p>
          <p>Money: <?php echo '<span style="color: black; font-weight: bold;">$ ' . money_format ( '%i' , $loggedProfile->Money )  . '</span>';?></p>
          <p>Academi: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Academia . '</span>';?></p>
          <p>Club: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Club . '</span>';?></p></h4>
      </div>
  </div>
</div>
<div class="baners">
   <div class="row">
      <div class="col-sm">
         <div id="baner1"><img src="Components/imagenes/animation.png" width="" height="" alt=""/></div>
      </div>
      <div class="col-sm">
         <div id="baner2"><img src="Components/imagenes/productor.jpg" width="" height="" alt=""/></div>
      </div>
      <div class="col-sm">
         <div  id="baner3"><img src="Components/imagenes/productor.jpg" width="" height="" alt=""/></div>
      </div>
  </div>
</div>