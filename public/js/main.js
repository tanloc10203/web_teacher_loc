$(document).ready(function () {
  $.ajaxSetup({
    beforeSend: function (xhr, settings) {
      settings.url = settings.url.replace(/^\//, '')
    }
  })
})