$(document).ready(function(){

    $("#collect_btn").click(send_data);
    
    });
    
    function send_data(){
        let person_data = {
            username: $("#name").val(),
            password: $("#pw").val(),
        };
    
    $.ajax({
    
        url: "reg_insert.php",
        type: "POST",
        datatype: "json",
        data: person_data,
        success: function () {
    
            //console.log($("#name").val());
            //console.log($("#pw").val());
            
            //$(document).find("#pogi").html($("#name").val());
            //$(document).find("#gg").html($("#pw").val());
            alert("New data added!!!");
        },
        error: function (error) {
            alert(error);
        },
        complete: function (result) {
            console.log(result);
        },
    
    });
    }