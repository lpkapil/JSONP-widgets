jQuery(document).ready(function() {
  jQuery.ajax({
    type: 'GET',
    url: 'data.php?callback=?',
    data: {
        url: window.location.href
    },
    cache: false,
    dataType: 'jsonp',
    success: function (response) {
        jQuery('#widgetcontainer').html(response);
    },
    error: function (jqXHR, exception) {
        console.log(jqXHR);
    }
  });
});