
$(document).ready(function () {
  $("#do1,#do2,#do3,#do4").on("click", function (e) {
    if (
      $('input[type="text"][name="num1"]').val() == "" ||
      $('input[type="text"][name="num2"]').val() == ""
    ) {
      alert("Please Enter a Value!");
      return false;
    } else {
      // alert($(this).val());
      var postData = {
        args1: $("#num1").val(),
        args2: $("#num2").val(),
        operator: $(this).val(),
      };

      $.ajax({
        type: "POST",
        url: "http://localhost:7777/cal",
        data: JSON.stringify(postData),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
          console.log(JSON.stringify(data));
          // alert(JSON.stringify(data['result']));
          $("#result").val(data["result"]);
        },
        failure: function (errMsg) {
          alert(errMsg);
        },
      });
    }
  });
});
