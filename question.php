<html>
    <head>
        <title>Thank You!</title>
       
    </head>
    
    
    <div id="printableArea">

    <body style="margin:100px"> <h1><center><u>SRM UNIVERSITY</u></center></h1>
      <p><center><h3>RAMAPURAM CAMPUS</h3></center></p>
      <p><center><h2>DEPARTMENT OF INFORMATION TECHNOLOGY</h2></center></p>
      <p><center><h2>CYCLE TEST-I</h2></center></p>
      <p><h4>SUB-CODE/SUB:IT1005/Programming and development using C  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE/TIME ALLOTED:18th July,2016/45 Minutes</h4></p>
 
<hr>

<?php

    
    $db_login = array('host' => 'mysql.hostinger.in',
                  'user' => 'u839439463_sayan',
                  'pass' => 'sayan123',
                  'base' => 'u839439463_login',
                  'table' => 'questions'
                 );


    

     define('NUM_OF_QUESTIONS_TO_DISPLAY',3);


   $db = new mysqli($db_login['host'],$db_login['user'],$db_login['pass'],$db_login['base']);

/* (mysqli_connect_errno()) 
    trigger_error('DB connection failed: '.mysqli_connect_errno());*/

$query = "SELECT * FROM questions2 ORDER BY RAND() LIMIT 10";

$fg = mysqli_query($db,$query);
echo "<center><h3>Part-A</h3></center>";
?>
<ol>

<?php
while($ques = mysqli_fetch_assoc($fg))
{
  echo '<li>';
  echo ' '.$ques['questions']."</li>";
}

?>

</ol>

<?php






$query = "SELECT * FROM questions ORDER BY RAND() LIMIT 5";

$randi = mysqli_query($db,$query);
echo "<center><h3>Part-B</h3></center>";
?>

<ol>
	
	<?php
while($ques = mysqli_fetch_assoc($randi))
{
echo '<li>';
echo ' '.$ques['questions']."</li>";
}
?>
</ol>



<?php


$query = "SELECT * FROM questions3 ORDER BY RAND() LIMIT 4";

$fk = mysqli_query($db,$query);
echo "<center><h3>Part-C</h3></center>";
?>
<ol>
	<?php
while($ques = mysqli_fetch_assoc($fk))
{
  echo '<li>';
  echo ' '.$ques['questions']."</li>";
  
}
?>
</ol>
<?php


//This part of code will be required when there will be multiple databases and subjects.

 /*

    if ($res = $db->query('SELECT id, questions FROM questions  
                       ORDER BY RAND() LIMIT '.(int)NUM_OF_QUESTIONS_TO_DISPLAY.';')) {
    $questions = array();
    $questions_ids = array();
    while ($r = $res->fetch_assoc()) {
        $questions[] = $r;
        $questions_ids[] = $r['id'];

        }
}
   

/*
if ($res = $db->query('SELECT a.id_questions, a.answer, a.correct FROM answers a 
                       WHERE (a.id_questions IN ('.implode(',',$questions_ids).')) 
                       ORDER BY RAND();')) {
    $answers = array();

    while ($r = $res->fetch_assoc())
        $answers[$r['id_questions']][] = $r;


}
   

       echo 'It Works';


   
*/

?>

     <?php

           $questions = array();


      foreach ($questions as $question) : echo($questions);


       ?>
            <strong>
              <?php 
            echo ($question['questions']);
             ?>
           </strong>
            <small>Question id:<?php echo ($question['id']); ?></small>
            <ul>
                <?php foreach ($answers[$question['id']] as $answer) : ?>
                    <li><?php echo ($answer['answer'].($answer['correct'] ? '(*)' : '')); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
        
        <br><br><br><br>
        



      
</div>

<center>
<input type="button" onclick="printDiv('printableArea')" value="Print" />
</center>

<br><br><br><br>

        <center>
        <form>
<input type="button" onClick="history.go(0)" value="Generate Again">
</form>
</center>


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    </body>
</html>

