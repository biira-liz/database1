
<?php 
include 'db.php';
$sql = "SELECT * FROM responses";
$result = $conn->query($sql);

?>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>My contact form data</h2>
    <table class="table table bordered">
      <!-- <thead>
         <th>id</th>
         <th>name</th>
         <th>email</th>
         <th>message</th>
         <th>create</th>
       </thead>
       <?php while($row = $result->fetch_assoc()){ ?>   
        <tbody>
               </tr>
            <td><?=$row[id] ?></td>
            <td><?=$row[name] ?></td>
            <td><?=$row[email] ?></td>
            <td><?=$row[message] ?> </td>
           <tr>
        
        </tbody>
        -->
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>message</th>
            <th>create</th>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?=$row['id'] ?></td>
            <td><?=$row['name'] ?></td>
            <td><?=$row['email'] ?></td>
            <td><?=$row['message'] ?></td>
        </tr>
            
        <?php   } ?>

        </table>
    </div>
    
</body>
</html>