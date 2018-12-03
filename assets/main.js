$(function() {
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});


$(document).ready(function(){
  // form submit through enter key
  // $('#write_msg').keyup(function(e){
  //   if (e.which == 13) {
  //     $('form').submit();
  //   }
  // });
  loadMsgs();

  setInterval(function(){
    loadMsgs();
  }, 1000);

  //form submit and data store in database by jquery
  $('#msgFrm').submit(function(){
    var message = $('#write_msg').val();
    $.post('inc/classes/Messages.php?action=sendMessage&message='+message, function(response){
      if (response == 1) {
        loadMsgs();
        document.getElementById('msgFrm').reset();
      }
    });
    return false;
  });

  //form submit and data store in database by jquery with button clicking
  $("#sendmsgbutton").on("click", function(){
    $('#msgFrm').submit();
  });

  //Load messages from database
  function loadMsgs(){
    $.post('inc/classes/Messages.php?action=getMessage', function(response){
      //alert($( '#msgBox' ).height());
      var msgBoxHeight = $( '#msgBox' ).height();
      var scrollPosition = $('#msgBox').scrollTop();
      var scrollPosition = parseInt(scrollPosition) + parseInt(msgBoxHeight);
      var scrollHeight = $('#msgBox').prop('scrollHeight');
      $('#msgBox').html(response);
      if (scrollPosition < scrollHeight) {

      }else {
        $('#msgBox').scrollTop($('#msgBox').prop('scrollHeight'));
      }




    });
  }//bracket ending loadMsgs function

});
