$(document).ready(function(){
    display();
    displayPresc();
});
function display(){
        $("chkjoin").val("");
        $.ajax({
            url: "manageView/viewcheck.php",
            type: "POST",
            success: function(data){
                $("#joinTable").html(data);
            }
        });
    };
    function displaySearch(search){
    $.post("manageView/viewcheck.php", {search:search}, function(data){$("#joinTable").html(data);});
}

$("#chkjoin").keyup(function(){
    $data = $(this).val();
    //console.log($(this).val());
    if($data){
        displaySearch($data);
         //display search only
    }else{
        display();//display all
    }
});
function displayPresc(){
        $("prescJoin").val("");
        $.ajax({
            url: "manageView/viewpres.php",
            type: "POST",
            success: function(data){
                $("#Jointable").html(data);
            }
        });
    };
    function displaySearchP(searchP){
    $.post("manageView/viewpres.php", {search:searchP}, function(data){$("#Jointable").html(data);});
}

$("#prescJoin").keyup(function(){
    $data = $(this).val();
    //console.log($(this).val());
    if($data){
        displaySearchP($data);
         //display search only
    }else{
        displayPresc();//display all
    }
});