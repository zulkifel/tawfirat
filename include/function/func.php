<?php function info_student($classid){
  global $con;
    $stmt = $con->prepare("SELECT * FROM subjects JOIN teatcher ON teach_id=id
    JOIN subname ON sudid=su WHERE class_id=$classid");
    $stmt->execute();
    $row=$stmt->fetchAll();
    return $row; }
function info_student1($nn){
foreach ($nn as $r) {
          if($r['gends']==1){$kind =" بنين  ";}
          elseif($r['gends']==2){$kind =" بنات ";} ?>
          <tr class="cent">
          <td ><?php echo $r['namesub'];  ?></td>
          <td ><?php echo $r['teacher'];  ?></td>
          <td ><?php echo $r['teach_id']; ?> </td>
          <td ><?php echo $kind; ?> </td>
          <td ><a href="std-admin.php?do=information_student_class&classid=<?php echo $r['class_id']; ?>&gender=<?php echo $r['gends']; ?>&su=<?php echo $r['su']; ?>"><span class="btn btn-primary">مزيد من التفاصيل
          </span> </a></td>
          </tr>
 <?php } }
  function nateja($num,$gend){
     global $con;
    $stmt = $con->prepare("SELECT * FROM subjects JOIN teatcher ON teach_id=id
    JOIN subname ON sudid=su WHERE class_id=? AND gends=? ");
    $stmt->execute([$num,$gend]);
    $row=$stmt->fetchAll();
    return $row; }
 function nateja1($cc){
foreach ($cc as $re) { ?>
      <td class="cont table-bo thebac"><?php echo $re['namesub']; ?> </td>
<?php } } 
/*function precent($num){
  if ($num) {

  }*/

//}
?>