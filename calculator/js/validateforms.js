$().ready(function(){
  $('#loginForm').submit(function(){
    if($('#username').val() == ''){
      $('#errUsername').html('Username can not be empty');
      $('#errUsername').css('color','red'); 
      return false;
    }
    else{
      $('#errUsername').html('Username');
      $('#errUsername').css('color','#ccc');
    }
    
    if($('#password').val() == ''){
      $('#errPassword').html('Password can not be empty'); 
      $('#errPassword').css('color','red');
      return false;
    }
    else{
      $('#errPassword').html('Password');
      $('#errPassword').css('color','#ccc');
    }
  });
});