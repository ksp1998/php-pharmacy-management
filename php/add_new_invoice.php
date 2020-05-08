<?php

  if(isset($_GET['action']) && $_GET['action'] == "add_row")
    createMedicineInfoRow();

  if(isset($_GET['action']) && $_GET['action'] == "medicine_list")
    showMedicineList(strtoupper($_GET['text']));

  if(isset($_GET['action']) && $_GET['action'] == "fill")
    fill(strtoupper($_GET['name']), $_GET['column']);

  function createMedicineInfoRow() {
    $row_id = $_GET['row_id'];
    ?>
    <div class="row col col-md-12">
      <div class="col-md-3">
        <input id="medicine_name" name="medicine_name" class="form-control" list="medicine_list" placeholder="Select Medicine" onkeydown="medicineOptions(this.value);" onchange="fillFields(this.value);">
        <datalist id="medicine_list" style="display: none;">
          <?php showMedicineList("") ?>
        </datalist>
      </div>
      <div class="col col-md-1"><input type="text" class="form-control" id="batch_id" disabled></div>
      <div class="col col-md-1"><input type="number" class="form-control" id="available_quantity" disabled></div>
      <div class="col col-md-1"><input type="text" class="form-control" id="expiry_date" disabled></div>
      <div class="col col-md-1">
        <input type="number" class="form-control" id="quantity" value="0" onkeyup="getTotal();">
        <code class="text-danger small font-weight-bold float-right" id="quantity_error" style="display: none;"></code>
      </div>
      <div class="col col-md-1"><input type="number" class="form-control" id="mrp" disabled></div>
      <div class="col col-md-1">
        <input type="number" class="form-control" id="discount" value="0" onkeyup="getTotal();">
        <code class="text-danger small font-weight-bold float-right" id="discount_error" style="display: none;"></code>
      </div>
      <div class="col col-md-1"><input type="number" class="form-control" id="total" disabled></div>
      <div class="col col-md-2">
        <button class="btn btn-primary" onclick="addRow();">
          <i class="fa fa-plus"></i>
        </button>
        <button class="btn btn-danger"  onclick="removeRow('<?php echo $row_id ?>');">
          <i class="fa fa-trash"></i>
        </button>
      </div>
    </div>
    <div class="col col-md-12">
      <hr class="col-md-12" style="padding: 0px;">
    </div>
    <?php
  }

  function showMedicineList($text) {
    require 'db_connection.php';
    if($con) {
      if($text == "")
        $query = "SELECT * FROM medicines_stock";
      else
        $query = "SELECT * FROM medicines_stock WHERE UPPER(NAME) LIKE '%$text%'";
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($result))
        echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
    }
  }

  function fill($name, $column) {
    require 'db_connection.php';
    if($con) {
      $query = "SELECT * FROM medicines_stock WHERE UPPER(NAME) = '$name'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_array($result);
        echo $row[$column];
      }
    }
  }
?>
