$(document).ready(function(e){
    display();
  });
  function display(){
    $("#searchMedicine").val("");
    $.ajax({
      url: "manageMedicine/viewmedicine.php",
      type: "POST",
      success: function(data) {
          $("#displayMedicines").html(data);
      }
    })
  };

  function editMeds(m_id){
    $.post("manageMedicine/updatemedicine.php", {m_id:m_id}, function(data){
      $("#updateMed").modal("show");
      let tbl_medicine = JSON.parse(data);
   $("#medID").text(tbl_medicine.m_id);
     $("#m_med").val(tbl_medicine.m_name);
   $("#m_class").val(tbl_medicine.m_class);
   $("#m_quantity").val(tbl_medicine.m_quantity);
});
}

  $("#updateMeds").submit(function(e){
    e.preventDefault();
    $("#confirmUpMed").modal('show');
    $("#updateMed").modal('hide');
  });

$(document).on('click', '#confirm_update_M', function(){
$m_id = $("#medID").text();
$m_med = $("#m_med").val();
$m_class= $("#m_class").val();
$m_quantity= $("#m_quantity").val();

$.ajax({
    url: "manageMedicine/updatemedicine.php",
    type: "POST",
    data: {
        medID: $m_id,
        m_med: $m_med,
        m_class: $m_class,
        m_quantity: $m_quantity
    },
    success: function(response){
        if (response === "success"){
            $("#confirmUpMed").modal('hide');
            $("#updateMeds").trigger('reset');
            $("#success").modal('show');
            display();
        } else {
            $("#failed").modal('show');
        }
    }
})
});

  
  $("#formMedicine").submit(function(e){
    e.preventDefault();
    $("#confirmaddMed").modal('show');
    $("#addMed").modal('hide');
  });

  $(document).on('click', '#confirm_addM', function(){
    $medname = $("#medname").val();
    $mclass = $("#mclass").val();
    $quantity = $("#quantity").val();

    $.ajax({
      url: "manageMedicine/addmedicine.php",
      type: "POST",
      data: {
        medname: $medname,
        mclass: $mclass,
        quantity: $quantity
      },
      success: function(response){
        if (response === "success"){
          $("#confirmaddMed").modal('hide');
            $("#formMedicine").trigger('reset');
            $("#success").modal('show');
          display();
        } else {
          $("#failed").modal('show');
        }

      }
    })
  });

      //dispaly with search value
function displaySearch(search){
$.post("manageMedicine/searchmedicine.php", {search:search}, function(data){$("#displayMedicines").html(data);});
}

$("#searchMedicine").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearch($data);
     //display search only
}else{
    display();//display all
}
});
