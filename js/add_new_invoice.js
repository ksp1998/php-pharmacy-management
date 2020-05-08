var rows = 0;

class MedicineInfo {
  
}

function addRow() {
  if(typeof addRow.counter == 'undefined')
    addRow.counter = 1;
  var previous = document.getElementById("invoice_medicine_list_div").innerHTML;
  var node = document.createElement("div");
  var cls = document.createAttribute("id");
  cls.value = "medicine_row_" + addRow.counter;
  node.setAttributeNode(cls);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200) {
      node.innerHTML = xhttp.responseText;
      document.getElementById("invoice_medicine_list_div").appendChild(node);
    }
  };
  xhttp.open("GET", "php/add_new_invoice.php?action=add_row&row_id=" + cls.value, true);
  xhttp.send();
  //alert(addRow.counter);
  addRow.counter++;
  rows++;
}

function removeRow(row_id) {
  if(rows == 1)
    alert("Can't delete only one row is there!");
  else {
    document.getElementById(row_id).remove();
    rows--;
  }
}

function medicineOptions(text) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById("medicine_list").innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "php/add_new_invoice.php?action=medicine_list&text=" + text.trim(), true);
  xhttp.send();
}

function fillFields(medicine_name) {
  fill(medicine_name, 'batch_id', 'BATCH_ID');
  fill(medicine_name, 'available_quantity', 'QUANTITY');
  fill(medicine_name, 'expiry_date', 'EXPIRY_DATE');
  fill(medicine_name, 'mrp', 'MRP');
  getTotal();
  document.getElementById("medicine_name").blur();
}

function fill(name, field_name, column) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById(field_name).value = xhttp.responseText;
  };
  xhttp.open("GET", "php/add_new_invoice.php?action=fill&name=" + name + "&column=" + column, true);
  xhttp.send();
}

function getTotal() {
  var mrp = document.getElementById("mrp").value;
  var quantity = document.getElementById("quantity").value;
  if(!checkQuantity(quantity, 'quantity_error')) return;
  var discount = document.getElementById("discount").value;
  if(!checkValue(discount, 'discount_error')) return;
  var total = document.getElementById("total");
  total.value = mrp * quantity - (discount * mrp * quantity / 100);
}
