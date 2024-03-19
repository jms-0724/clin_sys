$(document).ready(function(){
  display();

$("#confirm_addP").click(function(){
$lname = $("#lname").val();
$fname = $("#fname").val();
$mname = $("#mname").val();
$gender = $("#gender").val();
$age = $("#age").val();
$town = $("#town").val();
$brgy = $("#brgy").val();
$cnumber = $("#cnumber").val();

$.ajax({
url: "managePatient/addpatient.php",
type:"POST",
data: {
lname: $lname,
fname: $fname,
mname: $mname,
gender: $gender,
age: $age,
town: $town,
brgy: $brgy,
cnumber: $cnumber
},

success: function(response){
if(response === "success"){
  $("#confirmaddPat").modal('hide');
  $("#formPatient").trigger('reset');
  $("#success").modal('show');
  display();
} else {

  $("#failed").modal('show');
}
} 

});


});
$("#upPatient").submit(function(e){
    e.preventDefault();
    $("#confirmpatup").modal('show');
    $("#updatePatient").modal('hide');
});

$("#backto_add").click(function(){
$("#confirmaddPat").modal('hide');
$("#addPat").modal('show');
});
$("#backto_up").click(function(){
$("#confirmpatup").modal('hide');
$("#updatePatient").modal('show');
});

$("#confirm_pat").click(function(){
$patID = $("#patID").text();
$up_lname = $("#up_lname").val();
$up_fname = $("#up_fname").val();
$up_mname = $("#up_mname").val();
$up_gender = $("#up_gender").val();
$up_age = $("#up_age").val();
$up_town = $("#up_town").val();
$up_brgy = $("#up_brgy").val();
$up_cpnum =  $("#up_cpnum").val();

$.ajax({
url: "managePatient/updatepatient.php",
type: "POST",
data: {
  patID: $patID,
  up_lname: $up_lname,
  up_fname: $up_fname,
  up_mname: $up_mname,
  up_gender: $up_gender,
  up_age: $up_age,
  up_town: $up_town,
  up_brgy: $up_brgy,
  up_cpnum: $up_cpnum
}, 
success: function(response){
  if (response === "success"){
    $("#confirmpatup").modal('hide');
    $("#upPatient").trigger('reset');
    $("#success").modal('show');
    display();
  } else {
    $("#failed").modal('show');
  }
}
})
});

});
function display(){
$("#searchPatients").val("");
$.ajax({
    url: "managePatient/searchpatient.php",
    type: "POST",
    success: function(data){
        $("#showPatients").html(data);
    }
});
};
function editPat(pat_id){
$.post("managePatient/updatepatient.php", {pat_id:pat_id}, function(data){
  let tbl_patient = JSON.parse(data);
  $("#patID").text(tbl_patient.pat_id);
  $("#up_lname").val(tbl_patient.pat_lname);
  $("#up_fname").val(tbl_patient.pat_fname);
  $("#up_mname").val(tbl_patient.pat_mname);
  $("#up_gender").val(tbl_patient.pat_gender);
  $("#up_age").val(tbl_patient.pat_age);
  $("#up_town").val(tbl_patient.pat_mun);
  $("#up_brgy").val(tbl_patient.pat_bar);
  $("#up_cpnum").val(tbl_patient.pat_cpnum);
  $("#updatePatient").modal("show");
});
}

$("#formPatient").submit(function(e){
  var phone = $("#cnumber").val();

if (phone.length < 11){
  $("#cpnumalert").text("Phone Number is less than 11 digits");
  $("#addPat").modal('show');
  e.preventDefault();
} else if (phone.length > 11){
  $("#cpnumalert").text("Phone Number is more than 11 digits");
  $("#addPat").modal('show');
} else {
  e.preventDefault();
$("#confirmaddPat").modal('show');
$("#addPat").modal('hide');
}
});

//dispaly with search value
function displaySearch(search){
$.post("managePatient/searchpatient.php", {search:search}, function(data){$("#showPatients").html(data);});
}

//search realtime
$("#searchPatients").keyup(function(){
$data = $(this).val();
//console.log($(this).val());
if($data){
displaySearch($data);
 //display search only
}else{
display();//display all
}
});