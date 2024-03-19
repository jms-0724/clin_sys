$(document).ready(function(){
    $("#medTable").hide();
    $("#chkTable").show();
      display();
      displayChk();
      displayPres();
      displayResults();
      displayDay();

      $("#btn_back").click(function(){
        $("#confirmchk").modal('hide');
     $("#addCheck").modal('show');
      });
      $("#btn-backP").click(function(){
        $("#confirmpresc").modal('hide');
        $("#addPres").modal("show");
      });
  });

  $("#searchpatcurrent").click(function(){
  $("#showCurrent").show();
});
$("#hidePat").click(function(){
    $("#showCurrent").hide();
});
$("#btn_chk").click(function(){
    $("#chkTable").show();
});

$("#btnPres").click(function(){
    $("#pres_show").show();
});
$("#hidechk").click(function(){
    $("#chkTable").hide();
});
$("#hidepres").click(function(){
    $("#pres_show").hide();
});
  $("#chkmonth").change(function(){
      displayDay();
  });
  $("#showMedicines").click(function(){
    $("#medTable").show();
  });
  $("#hideMedicines").click(function(){
    $("#medTable").hide();
})

  function displayDay(){
var selMonth = $("#chkmonth").val();
var days = 31;
switch (selMonth) {
    case "April":
    case "June":
    case "September":
    case "November":
        days = 30;
        break;
    case "February":
        days = 28; // 29 in a leap year
        break;
}

var daysSelect = $("#chkday"); 
daysSelect.empty();
for (let i = 1; i <= days; i++){
    daysSelect.append($("<option></option>").attr("value", i).text(i));
}
}
  function display(){
    $("#searchcurrent").val("");
    $.ajax({
        url: "manageCheckups/checkpatient.php",
        type: "POST",
        success: function(data){
            $("#checkPatients").html(data);
        }
    });
};
function displaySearch(search){
$.post("manageCheckups/checkpatient.php", {search:search}, function(data){$("#checkPatients").html(data);});
}

$("#searchcurrent").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearch($data);
     //display search only
}else{
    display();//display all
}
});
function addcheckups(pat_id){
    $.post("manageCheckups/addcheckups.php", {pat_id:pat_id}, function(data){
    $("#addCheck").modal("show");
      let tbl_current = JSON.parse(data);
      $("#chkpat").val(tbl_current.pat_id);
      $("#searchCheckups").val(tbl_current.pat_id);
});
}

$("#chk_form").submit(function(e){
e.preventDefault()
$("#confirmchk").modal('show');
$("#addCheck").modal('hide');
});

$(document).on('click', '#confirm_chk', function(){
    $cnumber = $("#chknumber").val();
$chkmonth = $("#chkmonth").val();
$chkday = $("#chkday").val();
$chkyear = $("#chkyear").val();
$temp = $("#temp").val();
$systole = $("#systole").val();
$diastole = $("#diastole").val();
$symptoms = $("#symptoms").val();
$ph_remarks = $("#ph_remarks").val();
$chkpat = $("#chkpat").val();

$.ajax({
    url: "manageCheckups/addcheckups.php",
    type: "POST",
    data: {
        chknumber: $cnumber,
        chkmonth: $chkmonth,
        chkday: $chkday,
        chkyear: $chkyear,
        temp: $temp,
        systole: $systole,
        diastole: $diastole,
        symptoms: $symptoms,
        ph_remarks: $ph_remarks,
        chkpat: $chkpat
    },
    success: function(response){
        if(response === "success"){
            $("#confirmchk").modal('hide');
            $("#chk_form").trigger('reset');
            $("#success").modal('show');

            display();
    } else {
        $("#failed").modal('show');
    }
    }
});
});
function displayChk(){
    $("#searchCheckups").val("");
    $.ajax({
        url: "manageCheckups/searchcheckups.php",
        type: "POST",
        success: function(data){
            $("#showCheckups").html(data);
        }
    });
};

function displaySearchChk(searchChk){
$.post("manageCheckups/searchcheckups.php", {search:searchChk}, function(data){$("#showCheckups").html(data);});
}
$("#searchCheckups").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearchChk($data);
     //display search only
}else{
    displayChk();//display all
}
});

function displayPres(){
    $presc = $("#searchPresc").val("");
    $("#searchPresc").val("");
    $.ajax({
        url: "managePrescription/searchprescript.php",
        type: "POST",
        success: function(data){
            $("#showPresc").html(data);
        }
    });
};

function displaySearchPres(searchPres){
$.post("managePrescription/searchprescript.php", {search:searchPres}, function(data){$("#showPresc").html(data);});
}
$("#searchPresc").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearchPres($data);
     //display search only
}else{
    displayPres();//display all
}
});
function addPresc(c_id){
    $.post("managePrescription/addprescript.php", {c_id:c_id}, function(data){
      let tbl_chkup = JSON.parse(data);
      $("#addPres").modal("show");
      $("#chk_id").val(tbl_chkup.c_id);
      $("#searchPresc").val(tbl_chkup.c_id);
});
}
$("#addPres").submit(function(e){
e.preventDefault();
$("#confirmpresc").modal('show');
$("#addPres").modal("hide");

});

$(document).on('click', '#confirm_pres', function(){
$chk_id = $("#chk_id").val();
$pr_name = $("#pr_name").val();
$pr_quantity = $("#pr_quantity").val();
$pr_dosage = $("#pr_dosage").val();
$medid = $("#medid").val();

$.ajax({
url:"managePrescription/addprescript.php",
type:"POST",
data: {
    chk_id: $chk_id,
    pr_name: $pr_name,
    pr_quantity: $pr_quantity,
    pr_dosage: $pr_dosage,
    medid: $medid
}, 
success: function(response){
    if (response === "success"){
            $("#confirmpresc").modal('hide');
            $("#addPres").trigger('reset');
            $("#success").modal('show');
            display(); 
    } else {
        $("#failed").modal('show');
}
} 
});
});
function displayResults(){
    $("#medid").val("");
    $.ajax({
      url: "managePrescription/premed.php",
      type: "POST",
      success: function(data) {
          $("#dispMed").html(data);
      }
    })
  };
            //dispaly with search value(medicines)
function displaySearchMeds(searchmeds){
$.post("managePrescription/premed.php", {search:searchmeds}, function(data){$("#dispMed").html(data);});
}

$("#medid").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearchMeds($data);
     //display search only
}else{
    displayResults();//display all
}
});
function assignMeds(m_id){
$.post("managePrescription/assignmeds.php", {m_id:m_id}, function(data){
    console.log(data);
      let tbl_assign = JSON.parse(data);
      $("#medid").val(tbl_assign.m_id);
      $("#pr_name").val(tbl_assign.m_name);
      $("#medTable").hide();
});
};