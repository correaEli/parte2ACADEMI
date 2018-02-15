<div class="info">
  <div class="central2block">
    <div class="col-sm">
      <div id="baner2">
          <h1>stats</h1>
          <h4><p> hp:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionHP . '</span>';?></p>
          <p>Attack:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionAttack . '</span>';?></p>
          <p>defens:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionDeffens . '</span>';?></p>
          <p>stamina:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionStamina . '</span>';?></p>
          <p>speed:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionSpeed . '</span>';?></p>
          <p>inteligent:<?php echo '<span style="color: black; font-weight: bold;"> ' . $stats->ActionInteligen . '</span>';?></p></h4>
      </div>
    </div>
    <div class="col-sm">
      <div id="baner1">
          <h1>Information</h1>
          <h4><p>Name:<?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Name . '</span>';?> </p>
          <p>LV: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->LV . '</span>';?></p>
          <p>Money: <?php echo '<span style="color: black; font-weight: bold;">$ ' . money_format ( '%i' , $loggedProfile->Money )  . '</span>';?></p>
          <p>Academi: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Academia . '</span>';?></p>
          <p>Club: <?php echo '<span style="color: black; font-weight: bold;"> ' . $loggedProfile->Club . '</span>';?></p></h4>
      </div>
    </div>
  </div>
</div>
<div class="baners">
   <div class="row">
      <div class="col-sm">
         <div id="baner3">
          <h1>Friends</h1>
         <a> <?php
        foreach ($NameFriend->Friend as $rec=>$Friend){
            ?><p><a type="button" class="botones_F" href="index.php?a=goProfileFriends"><?php
              echo '<span style="color: black; font-weight: bold;"> ' . $Friend . '</span>';
            ?></p><?php
          }
        ?></p></a>
         </div>
      </div>
      <div class="col-sm">
         <div id="baner4">
          <h1>Foes</h1>
         <a> <?php
        foreach ($NameFoes->Foes as $rec=>$Foes){
            ?><p><?php
              echo '<span style="color: black; font-weight: bold;"> ' . $Foes . '</span>';
            ?></p><?php
          }
        ?></a>
         </div>
      </div>
      <div class="col-sm">
         <div  id="baner5">
          <h1>Craft</h1>
         <a> <?php
        foreach ($NameCraft->Name as $rec=>$Craft){
            ?><p><?php
              echo '<span style="color: black; font-weight: bold;"> ' . $Craft . '</span>';
              //echo '<pre>' . print_r($NameCraft,true) . '</pre>';
            ?></p><?php
          }
        ?></a>
         </div>
      </div>
      <div class="col-sm">
         <div  id="baner6">
          <h1>Sorcery</h1>
         <a> <?php
        foreach ($NameSorcery->Name as $rec=>$Sorcery){
            ?><p><?php
              echo '<span style="color: black; font-weight: bold;"> ' . $Sorcery . '</span>';
            ?></p><?php
          }
        ?></a></div>
      </div>
  </div>
</div>