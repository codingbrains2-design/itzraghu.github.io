$(document).ready(function() {

    $('#subBtn').on('click', function(){
        var q1 = $('#q1').text();
        var q2 = $('#q2').text();
        var q3 = $('#q3').text();
        var q4 = $('#q4').text();
        var q5 = $('#q5').text();
        var q6 = $('#q6').text();
        var q7 = $('#q7').text();
        var q8 = $('#q8').text();
        var q9 = $('#q9').text();
        var q10 = $('#q10').text();

        var set1q1 = $('#php_set1_q1 input:checked').val();
        var set1q2 = $('#php_set1_q2 input:checked').val();
        var set1q3 = $('#php_set1_q3 input:checked').val();
        var set1q4 = $('#php_set1_q4 input:checked').val();
        var set1q5 = $('#php_set1_q5 input:checked').val();
        var set1q6 = $('#php_set1_q6 input:checked').val();
        var set1q7 = $('#php_set1_q7 input:checked').val();
        var set1q8 = $('#php_set1_q8 input:checked').val();
        var set1q9 = $('#php_set1_q9 input:checked').val();
        var set1q10 = $('#php_set1_q10 input:checked').val();

        if ( $("input[type=radio]:checked").length < 10 ) {
            alert('Please answer all of the questions');
        }
        else
        {
            $.ajax({
                url: 'php/php-set1-answer.php',
                type: 'POST',
                data: {'q1':q1, 'q2':q2, 'q3':q3, 'q4':q4, 'q5':q5, 'q6':q6, 'q7':q7, 'q8':q8, 'q9':q9, 'q10':q10, 
                'set1q1':set1q1, 'set1q2':set1q2, 'set1q3':set1q3, 'set1q4':set1q4, 'set1q5':set1q5, 
                'set1q6':set1q6, 'set1q7':set1q7, 'set1q8':set1q8, 'set1q9':set1q9, 'set1q10':set1q10},
                success: function (data) {
                    alert(data);
                    window.location.replace("index.html");
                    
                }
            });
        }
    });	
});