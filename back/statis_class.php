<div>
   
    <h3>所要查看的統計資料</h3>
    <form action="./api/statis_class.php" method="post">
    <?php
        
        $rows=$pdo->query("select `subject`,`id` from `class`  ")->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row){
            
    ?>
    <input type="radio" name="class" value="<?=$row['subject'];?>"><?=$row['subject'];?>
    <br>
    <?php
        }
        ?>
        
        <input type="submit" value="送出">
        <input type="reset" value="重置">
    </form>
    <hr>
   
</div>
<?php 
if(isset($_GET['class'])){
    ?>
<h1><?=$_GET['class']?></h1>
<div class="container" style="width:50%">
<?=$_GET['std']?>
<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="<?=ceil(($_GET['std']/$_GET['total'])*100);?>" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar overflow-visible bg-success" style="width:<?=ceil(($_GET['std']/$_GET['total'])*100);?>%"><?= ceil(($_GET['std']/$_GET['total'])*100);?>%
  &nbsp&nbsp&nbsp&nbsp<?=$_GET['std']?>個人
</div>
  <?php
}
?>
</div>
</div>
