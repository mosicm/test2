
<?php
class Robot {
  public $ct;
  public $loopArray = [];
  public function __construct($ct){
    $this->ct = $ct;
  }
  public function setLoop(array $instructions){
    foreach($instructions as $instruction){
      $this->loopArray[] = $instruction;
    }
  }
  public function L($ct){
    $ct--;
    return $ct;
  }
  public function R($ct){
    $ct++;
    return $ct;
  }
  public function S($ct){
    return $ct;
  }
  public function loop($i,$ct){
    return $this->G($this->loopArray[$i],$ct);
  }
  public function G($instruction,$ct){
    switch ($instruction) {
    case "L":
        return $this->L($ct);
        break;
    case "R":
        return $this->R($ct);
        break;
    case "S":
        return $this->S($ct);
        break;
    case "loop":
        $this->loop($ct);
        break;
    }
  }
}
$r1Loop = array("R","R","L","R","R","R","R","R","L","L","R","R","R","R","R","R","R","R","R","R","R","R","R","R");
$r2Loop = array("L","L","L","L","R","L","L","L","L","R","R","L","R","R","R","L","L","L","L","L","L","L","L","L");
$r1 = new Robot(33);
$r1->setLoop($r1Loop);
$oil1 = $r1->ct;
$r2 = new Robot(55);
$r2->setLoop($r2Loop);
$oil2 = $r2->ct;

for ($i = 0; ($r1->ct != $r2->ct); $i++){
  echo "Sequence " . $i . " <";
  for($j=0;$j<100;$j++){
    if($j == $oil1 || $j == $oil2){
      echo "*";
    }
    else if($j == $r1->ct){
      echo "L";
    }else if($j == $r2->ct){
      echo "D";
    }else{
      echo "-";
    }
  }
  $r1->ct = $r1->loop($i,$r1->ct);
  $r2->ct = $r2->loop($i,$r2->ct);
  echo "<br><br>";

  ob_flush();
  flush();
  sleep(1);
}
echo "Kraj igre.";
