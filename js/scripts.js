
  //Menu mobile
  $(document).ready(function() {
    $(".navigation-button").click(function() {
      $(this).toggleClass('menu-open');
      $(".sidebar").toggleClass('menu-open');
    });
  });

  //preloader
  $(document).ready(function() {
    $(window).load(function(){
      $(".preloader").delay(550).fadeOut('slow');

      //After loader
      $('a.link').click(function(e){
        redirect = $(this).attr('href');
        e.preventDefault();
        $('body').fadeOut("slow", function(){
          document.location.href = redirect
        });
      });
    });
  });

  //Nav tabs
  $(document).ready(function(){
  	$('.tabs li').click(function(){
  		var tab_id = $(this).attr('data-tab');

  		$('.tabs li').removeClass('active');
  		$('.tab-content').hide().fadeOut(600);

  		$(this).addClass('active');
  		$("#"+tab_id).fadeIn(600);
  	});
  });

  //User panel
  $(document).ready(function() {
    $(".navigation-user-panel .fa").click(function() {
      var nav_width = $(".navigation-user-panel").width();
      $(".dropdown-menu ").css('width', nav_width+2+"px");
    });

    var notification_number = $("#notifications-dropdown").children().length - 2;
    var messages_number = $("#message-dropdown").children().length - 2;

    $("#notifications .fa .badge").html(notification_number);
    $("#messages .fa .badge").html(notification_number);
  });

  //Chat
  $(document).ready(function() {
    $(".form-normal .btn-accept").click(function() {
      var message = $(".form-normal textarea").val()
      var date = new Date();
      var real_Date = date.getHours() + ":" + date.getMinutes();

      $(".form-normal textarea").val("");
      $(".panel-chat").append("<p class='panel-chat-message same-message'>"+message+"<span>"+real_Date+"</span></p>");
    });
  });
