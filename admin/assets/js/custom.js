// alert("js is ready for action.");

$(document).ready(function () {
  $("#logBtn").click(function (e) {
    e.preventDefault();
    var username = $("#input-username").val();
    var password = $("#input-password").val();
    $.ajax({
      url: "./getLogin.php",
      type: "post",
      data: {
        user: username,
        pass: password,
      },
      success: function (res) {
        console.log(res);
        //console.log(res);

        // setTimeout(function(){
        //     $(".showMsg").html(res);
        // }, 2000);

        $(".showMsg").html(res);
        $(".showMsg").delay(3000);
        $(".showMsg").fadeOut(1000);
      },
    });

    // setTimeout(function(){
    //     $(".showMsg").hide();
    // }, 2000);
  });

  // getting profilr data
  var pid = $(".hid").val();
  $.ajax({
    url: "./ajax/getprofiledata.php?id=" + pid,
    type: "get",
    success: function (res) {
      // console.log(res);
      $(".pd").html(res);
    },
  });

  // update profile

  $("#update_profile").on("submit", function (e) {
    e.preventDefault();

    var pid = $(".hid").val();
    var name = $(".fullname").val();
    var father = $(".fname").val();
    var email = $(".email").val();
    var address = $(".address").val();
    var phone = $(".phone").val();

    $.ajax({
      url: "./ajax/updateprofile.php",
      type: "post",
      data: {
        name: name,
        father: father,
        email: email,
        address: address,
        phone: phone,
        pid: pid,
      },
      success: function (res) {
        $.ajax({
          url: "./ajax/getprofiledata.php?id=" + pid,
          type: "get",
          success: function (res) {
            // console.log(res);
            $(".pd").html(res);
            name.val('');

            $(this).clear();

          },
        });
      },
    });
  });
});
