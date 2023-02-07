<?php   
include('connection.php');


$userId= $_GET['userId'];
$nameSkill= $_GET['nameSkill'];
$minLevel= $_GET['minLevel'];
$Desc= $_GET['desc'];
$damage= $_GET['damage'];
$minHealth= $_GET['minHealth'];
$minStr= $_GET['minStr'];
$minDex= $_GET['minDex'];
$minConst= $_GET['minConst'];
$minInt= $_GET['minInt'];
$minMana= $_GET['minMana'];
$animation= $_GET['animation'];
$isMagic= $_GET['isMagic'];
$cost = $_GET['cost'];
$effect = $_GET['effect'];
$effectValue = $_GET['effectValue'];


if ($isMagic == 0) {
    $sql = "insert into skils(UserID, NameSkill, MinLevel, Description, Damage, MinHealth, MinStrength, MinDex, MinConst, MinInt,MinMana , Animation, IsMagic) values(".$userId.",'".$nameSkill."',".$minLevel.",'".$Desc."',".$damage.",".$minHealth.",".$minStr.",".$minDex.",".$minConst.",".$minInt.",".$minMana.",'".$animation."','".$isMagic."');";
}
else if ($isMagic == 1) {
    $sql = "insert into skils(UserID, NameSkill, MinLevel, Description, Damage, MinHealth, MinStrength, MinDex, MinConst, MinInt,MinMana , Animation, IsMagic, Cost, Effect, EffectValue) values(".$userId.",'".$nameSkill."',".$minLevel.",'".$Desc."',".$damage.",".$minHealth.",".$minStr.",".$minDex.",".$minConst.",".$minInt.",".$minMana.",'".$animation."','".$isMagic."', ".$cost.", '".$effect."', ".$effectValue.");";
}

$result = mysqli_query($connect, $sql);
?>
