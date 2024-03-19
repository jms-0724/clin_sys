$(document).ready(function(){
    showTotalPat();
    showTotalBrands();
    showAvePres();
    showTotalMeds();
    showTotalChk();
    showAveAge();
});
function showTotalPat(){
    var $totalpat = $("#totalpat");
    // url, data, function
     $.post("dashboard/totalpat.php",{dd: 1},function(records){
         $totalpat.html(records);
            });
    }
function showTotalBrands(){
    var $totalmed = $("#countMedicine");
    $.post("dashboard/countmedicines.php",{dd: 1},function(records){
        $totalmed.html(records);
           });
   }
function showAvePres(){
    var $avgpres = $("#avgPres");
    $.post("dashboard/averagemed.php",{dd: 1},function(records){
        $avgpres.html(records);
           });
   }
   function showTotalMeds(){
    var $totalInv = $("#countTotal");
    $.post("dashboard/totalmedicines.php",{dd: 1},function(records){
        $totalInv.html(records);
           });
   }
   function showTotalChk(){
    var $totalchk = $("#totalChk");
    $.post("dashboard/totalcheckups.php",{dd: 1},function(records){
        $totalchk.html(records);
           });
   }
   function showAveAge(){
    var $totalInv = $("#agemean");
    $.post("dashboard/averageage.php",{dd: 1},function(records){
        $totalInv.html(records);
           });
   }

