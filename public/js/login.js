$(document).ready(function () {
  $("#login").on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      type: 'post',
      url: '/web_loc/login',
      dataType: 'json',
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function () {
        $("#overlay").fadeIn();
      },
      success: function (response) {
        $("#overlay").fadeOut();
        const { error, dataError } = response;

        if (error && dataError && Object.keys(dataError).length > 0) {
          const username = $(`input[name=username]`);
          const password = $(`input[name=password]`);

          const formFeedbackUsername = username.parent().find(".invalid-feedback");
          const formFeedbackPw = password.parent().find(".invalid-feedback");

          formFeedbackUsername.text('');
          formFeedbackPw.text('');

          username.removeClass('is-invalid');
          password.removeClass('is-invalid');

          if (dataError.username) {
            username.addClass('is-invalid');
            formFeedbackUsername.text(dataError.username);
          }

          if (dataError.password) {
            password.addClass('is-invalid');
            formFeedbackPw.text(dataError.password);
          }
        } else
          window.location.href = "/web_loc";
      },
      error: function (e) {
        console.log("Oops! Something went wrong! ", e);
      },
    })
  })
})