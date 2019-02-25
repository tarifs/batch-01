//
// $('#btn').click(function () {
//     // alert('test');
//
//     var firstNameValue = $('#firstName').val();
//     var lastNameValue = $('#lastName').val();
//     var fullName = firstNameValue+' '+lastNameValue;
//
//     // alert(fullName);
//     $('#fullName').val(fullName);
// });

$('#firstName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    $('#1').text(firstNameValue);
});

$('#lastName').keyup(function () {
    var lastNameValue = $('#lastName').val();
    $('#2').text(lastNameValue);
});
$('#lastName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    $('#3').text(firstNameValue+''+lastNameValue);
});