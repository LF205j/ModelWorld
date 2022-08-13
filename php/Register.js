
$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario =$.trin($('#usuario').val());
    var password=$.trin($('#password').val());
    alert(usuario);
});
