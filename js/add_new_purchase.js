var rows = 0;

class MedicineStock {
  constructor(name, batch_id, expiry_date, quantity, mrp, rate) {
    this.name = name;
    this.batch_id = batch_id;
    this.expiry_date = expiry_date;
    this.quantity;
    this.mrp = mrp;
    this.rate = rate;
  }
}

class NewMedicine {
  constructor(name, packing, generic_name, supplier_name) {
    this.name = name;
    this.packing = packing;
    this.generic_name = generic_name;
    this.supplier_name = supplier_name;
  }
}



function addRow() {
  if(typeof addRow.counter == 'undefined')
    addRow.counter = 1;
  var previous = document.getElementById("purchase_medicine_list_div").innerHTML;
  var node = document.createElement("div");
  var id = document.createAttribute("id");
  id.value = "medicine_row_" + addRow.counter;
  node.setAttributeNode(id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      node.innerHTML = xhttp.responseText;
      document.getElementById("purchase_medicine_list_div").appendChild(node);
  };
  xhttp.open("GET", "php/add_new_purchase.php?action=add_row&row_id=" + id.value + "&row_number=" + addRow.counter, true);
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

function isSupplier(name) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200) {
      alert(xhttp.responseText);
      if(xhttp.responseText.trim() == "true")
        return true;
    }
  };
  xhttp.open("GET", "php/add_new_purchase.php?action=is_supplier&name=" + name, false);
  xhttp.send();
}

function addPurchase() {
  var suppliers_name = document.getElementById('suppliers_name');
  var invoice_number = document.getElementById('invoice_number');
  var invoice_date = document.getElementById('invoice_date');

  if(isSupplier(suppliers_name.value))
    alert("true");
  else
    alert("false");

  if(!notNull(suppliers_name.value, "supplier_name_error"))
    suppliers_name.focus();
  //else if(!isSupplier(suppliers_name.value, "supplier_name_error")) {

  //}
    //suppliers_name.focus();
  else if(!notNull(invoice_number.value, 'invoice_number_error'))
    invoice_number.focus();
  else if(!checkDate(invoice_date.value, 'date_error'))
    invoice_date.focus();
  else {
    var parent = document.getElementById('purchase_medicine_list_div');
    var row_count = parent.childElementCount;
    var medicine_info = parent.children;

    var medicineStockRow = new Array(row_count-1);
    var newMedicine = new Array(row_count-1);
    //alert(newMedicine[0] == null);

    for(var i = 1; i < row_count; i++) {
      var elements_count = medicine_info[i].childElementCount;
      var elements = medicine_info[i].children;

      var medicine_name = elements[0].children[0].children[0];
      var medicine_name_error = elements[0].children[0].children[1];

      var packing = elements[0].children[1].children[0];
      var pack_error = elements[0].children[1].children[1];

      var batch_id = elements[0].children[2].children[0];
      var batch_id_error = elements[0].children[2].children[1];

      var expiry_date = elements[0].children[3].children[0];
      var expiry_date_error = elements[0].children[3].children[1];

      var quantity = elements[0].children[4].children[0];
      var quantity_error = elements[0].children[4].children[1];

      var mrp = elements[0].children[5].children[0];
      var mrp_error = elements[0].children[5].children[1];

      var rate = elements[0].children[6].children[0];
      var rate_error = elements[0].children[6].children[1];

      var amount = elements[0].children[7].children[0].children[0];

      var generic_name = elements[2].children[1].children[0];

      var flag = false;
      if(!notNull(medicine_name.value, medicine_name_error.getAttribute('id')))
        medicine_name.focus();

      else if(!notNull(packing.value, pack_error.getAttribute('id')))
        packing.focus();

      else if(!notNull(batch_id.value, batch_id_error.getAttribute('id')))
        batch_id.focus();

      else if(!checkExpiry(expiry_date.value, expiry_date_error.getAttribute('id')))
        expiry_date.focus();

      else if(!checkQuantity(quantity.value, quantity_error.getAttribute('id')))
        quantity.focus();

      else if(!checkValue(mrp.value, mrp_error.getAttribute('id')))
        mrp.focus();

      else if(!checkValue(rate.value, rate_error.getAttribute('id')))
        rate.focus();

      else if(Number.parseInt(mrp.value) < Number.parseFloat(rate.value)) {
        rate_error.style.display = "block";
        rate_error.innerHTML = "Rate must be less than MRP!";
        rate.focus();
      }
      else {
        flag = true;
        //alert("row perfect...");
        // go ahead and store row date
        medicineStockRow[i-1] = new MedicineStock(medicine_name.value, batch_id.value, expiry_date.value, quantity.value, mrp.value, rate.value);
        newMedicine[i-1] = new MedicineStock(medicine_name.value, packing.value, generic_name.checkValue, suppliers_name.value);


        //alert(medicineStockRow[i-1]);
      }
      if(!flag)
        return false;
    }
    //alert(medicineStockRow[1].name);
    // insert datas
  }
}


/*
for(var j = 0; j < elements_count - 1; j++) {
  var info_count = elements[j].childElementCount;
  var info_row = elements[j].children;
  for(var k = 0; k < info_count; k++) {
    console.log(info_row[k].children[0].value);
  }
  alert(info_count);
}
console.log(medicine_name = elements[0].children[0].children[0].value);
console.log(packing = elements[0].children[1].children[0].value);
console.log(batch_id = elements[0].children[2].children[0].value);
console.log(expiry_date = elements[0].children[3].children[0].value);
console.log(quantity = elements[0].children[4].children[0].value);
console.log(mrp = elements[0].children[5].children[0].value);
console.log(rate = elements[0].children[6].children[0].value);
console.log(amount = elements[0].children[7].children[0].children[0].value);
console.log(generic_name = elements[2].children[1].children[0].value);
*/
