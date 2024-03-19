$(document).ready(function(){
    display();
    $("#backtoupdate").click(function(){
        $("#updateStaff").modal("show");
        $("#confirmSTU").modal('hide');
    })
    
    $("#upStaff").submit(function(e){
    e.preventDefault();
    $("#confirmSTU").modal('show');
    $("#updateStaff").modal("hide");
});

$("#confirm_upS").click(function(){
    $uid = $("#uID").text();
    $u_uname = $("#u_uname").val();
    $u_pword = $("#u_pword").val();
    $u_ulevel = $("#u_ulevel").val();
    $u_lname = $("#u_lname").val();
    $u_fname = $("#u_fname").val();
    $u_mname = $("#u_mname").val();

    $.ajax({
        url: "manageStaff/updatestaff.php",
        type: "POST",
        data: {
            uID: $uid,
            u_uname:$u_uname,
            u_pword:$u_pword,
            u_ulevel:$u_ulevel,
            u_lname:$u_lname,
            u_fname:$u_fname,
            u_mname:$u_mname
        },
        success: function(response){
            if (response === "success"){
                $("#confirmSTU").modal('hide');
                $("#upStaff").trigger('reset');
                $("#success").modal('show');
                display();
            } else {
                alert(response);
                $("#confirmSTU").modal('hide');
                $("#failed").modal('show');
            }
        }
    })
});
function display(){
    $("#searchStaff").val("");
    $.ajax({
        url: "manageStaff/searchstaff.php",
        type: "POST",
        success: function(data){
            $("#staffTable").html(data);
        }
    });
};
$("#addStaff").submit(function(e){
    e.preventDefault();
    $("#confirmST").modal('show');
    $("#addST").modal('hide');
});
$("#backtoAdd").click(function(){
    $("#confirmST").modal('hide');
    $("#addST").modal('show');
});
$("#confirm_addS").click(function(){
    $uname = $("#uname").val();
    $pword = $("#pword").val();
    $ulevel = $("#ulevel").val();
    $lname = $("#lname").val();
    $fname = $("#fname").val();
    $mname = $("#mname").val();
    $.ajax({
        url: "manageStaff/addstaff.php",
        type: "POST",
        data: {
            uname:$uname,
            pword:$pword,
            ulevel:$ulevel,
            lname:$lname,
            fname:$fname,
            mname:$mname
        },
        success: function(response){
            if(response === "success"){
                $("#confirmST").modal('hide');
                $("#addStaff").trigger('reset');
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
$.post("manageStaff/searchstaff.php", {search:search}, function(data){$("#staffTable").html(data);});
}

//search realtime
$("#searchStaff").keyup(function(){
$data = $(this).val();
// console.log($(this).val());
if($data){
    displaySearch($data);
     //display search only
}else{
    display();//display all
}
});
});
function editStaff(uid){
    $.post("manageStaff/updatestaff.php", {uid:uid}, function(data){
        let tbl_user = JSON.parse(data);
        $("#uID").text(tbl_user.uid);
        $("#u_uname").val(tbl_user.username);
        $("#u_pword").val(tbl_user.password);
        $("#u_ulevel").val(tbl_user.userlevel);
        $("#u_lname").val(tbl_user.s_lname);
        $("#u_fname").val(tbl_user.s_fname);
        $("#u_mname").val(tbl_user.s_mname);
        $("#updateStaff").modal("show");
      });
};
function logout(){
    $("#log_out").show("modal");
};
