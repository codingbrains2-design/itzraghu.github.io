$(document).ready(function(){

    $('#msgBtn').on('click', function(){

        var empId = $('#empId').val();
        var msgById = $('#msgById').val();

        $.ajax({
            url:'php/message-to-one.php',
            type:'POST',
            data:{'empId':empId, 'msgById':msgById},
            success:function(data)
            {
                alert(data);
                $('#msgByIdForm').get(0).reset();
            }
        })
    });
});