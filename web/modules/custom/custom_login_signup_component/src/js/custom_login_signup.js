(function ($) {
  Drupal.behaviors.customLoginSignup = {
    attach: function (context, settings) {
      // Add click event handler to open the login/signup form as a pop-up in tab format
      $('.login-signup-link').click(function (e) {
        e.preventDefault();
        // Open the pop-up and load the login/signup form
        // Add your code here to open the pop-up and load the form
      });

      // Add any other client-side interactions related to the login/signup form
      // Add your code here for any additional client-side interactions
    }
  };
})(jQuery);