<?php
include "inc/init.php";

if ($_GET['add'] =="" and $_GET['update'] =="") {

    
    if ($_GET['insert']) {
    	echo '<div class="success">object created with success</div>';
    }
    if ($_GET['delete']) {
        echo '<div class="success">object '.$_GET['delete'].' deleted with success</div>';
    }
    if ($_GET['updated']) {
        echo '<div class="success">object '.$_GET['updated'].' updated with success</div>';
    }
?>

<div class="bs-example" data-example-id="panel-without-body-with-table">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading <a href="index.php?add=new_bla"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Health</th>
            <th>Damage</th>
            <th>Damage</th>
          </tr>
        </thead>
        <tbody>
<?php
$data = new data_fight;
$display = $data->doDisplay();
for ($i=0; $i < count($display); $i++) { 
    echo "<tr>";
    echo '<th scope="row">'.$display[$i][0].'</th>';
    echo '<th scope="row">'.$display[$i][1].'</th>';
    echo '<th scope="row">'.$display[$i][2].'</th>';
    echo '<th scope="row">'.$display[$i][3].'</th>';
    echo '<th scope="row"><a href="index.php?update='.$display[$i][0].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
     <a href="inc/class.data_delete.inc.php?delete='.$display[$i][0].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span> </th>';
    echo "</tr>";
}
?>
        </tbody>
      </table>
    </div>
  </div>
<?php 
}
elseif (isset($_GET['add']) && $_GET['add'] == 'new_bla') {?>
<h1>Create a new ...</h1>

<form role="form" method="post" action="inc/class.data_crud.inc.php">

	<div class="col-lg-12">

        <div class="form-group">
            <label class="white"> Name</label>
            <input name="name" id="name" class="form-control" placeholder="stoREtail"> 
			<span id="user-result"></span>  

        </div>
        <div class="form-group">
            <label class="white">Health</label>
            <input name="health" class="form-control" placeholder="Street">
        </div>
        <div class="form-group">
            <label class="white">Damage</label>
            <input name="damage" class="form-control" placeholder="City">
        </div>
        <div class="form-group">
            <label class="white">Attacks</label>
            <input name="attacks" class="form-control" placeholder="State">
        </div>
        
	</div>
	<div class="center">
        <button type="submit" name="insert" value="submit" class="btn btn-primary">Create Candidate</button>
        <button type="submit" value="submit" class="btn btn-primary" onclick="javascript:history.back()">Go Back!</button>
    </div>
</form>
<?php
}

elseif (isset($_GET['update'])) {
    $data = new data_display;
    $display = $data->do_display($_GET['update']);
?>
<h1>Update a new ...</h1>

<form role="form" method="post" action="inc/class.data_update.inc.php">

    <div class="col-lg-12">

        <div class="form-group">
            <label class="white"> Name</label>
            <input name="name" id="name" class="form-control" value="<?php echo $display[0]['name']; ?>"> 
            <input name="id" type="hidden" value="<?php echo $display[0]['id']; ?>"> 
        </div>
        <div class="form-group">
            <label class="white">Health</label>
            <input name="health" class="form-control" value="<?php echo $display[0]['health']; ?>">
        </div>
        <div class="form-group">
            <label class="white">Damage</label>
            <input name="damage" class="form-control" value="<?php echo $display[0]['damage']; ?>">
        </div>
        <div class="form-group">
            <label class="white">Attacks</label>
            <input name="attacks" class="form-control" value="<?php echo $display[0]['attacks']; ?>">
        </div>
    
    </div>
    <div class="center">
        <button type="submit" name="update" value="submit" class="btn btn-primary">Update candidate</button>
        <button type="submit" value="submit" class="btn btn-primary" onclick="javascript:history.back()">Go Back!</button>
    </div>
</form>
<?php
}
?>






