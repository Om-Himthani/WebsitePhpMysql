<?php
$username="root";
$password="";
$server='localhost';
$db='signin';

$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
        alert('Connection successfullly');
    </script>
    
    <?php
}
else{
    ?>
<script>
    alert('NO Connection');
</script>

<?php
}

?>