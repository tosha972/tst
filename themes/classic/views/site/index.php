<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
$connection=Yii::app()->db;
$command=$connection->createCommand("SELECT `title`,`text` FROM `tbl_post`");
//$command2=$connection->createCommand("SELECT `text` FROM `tbl_post`");
$dataReader=$command->query();
//$dataReader2=$command2->query();

foreach($dataReader as $row){
//foreach($dataReader2 as $row){
echo "<h1>".$row["title"]."</h1>", "<br>" ,$row["text"], "<br>" ;
//}
}
?>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts →</a>
                    </li>
                </ul>
           