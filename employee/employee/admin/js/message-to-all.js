$(document).ready(function(){

    $('#msgAllBtn').on('click', function(){

        var msgToAll = $('#msgToAll').val();

        $.ajax({
            url:'php/message-to-all.php',
            type:'POST',
            data:{'msgToAll':msgToAll},
            success:function(data)
            {
                alert(data);
                $('#msgToAllForm').get(0).reset();
            }
        })
    });
});