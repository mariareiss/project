<h1>Profiles</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>  
      </tr>
    </thead>
    <tbody>
<?php
while ($profiles = $profile->fetch_assoc()){
?>
  <tr>
   <td><?php echo $profiles['user_id'];?></td> 
   <td><?php echo $profiles['user_name'];?></td>
   <td><?php echo $profiles['user_email'];?></td>
   <td><?php echo $profiles['user_password'];?></td>

  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
