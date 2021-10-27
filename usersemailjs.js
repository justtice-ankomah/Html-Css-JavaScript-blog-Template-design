function usersemail(){
    var useremails=$("#email").val();
   
        $.post("usersemail.php",
        {
          useremail:useremails
        },
        function(data){
          alert(data);
        });
    
}