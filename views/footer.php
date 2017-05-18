    <footer>
        <div class="container">
            <p>&copy; 2016 Start Bootstrap. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../assets/lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../assets/js/new-age.min.js"></script>

    <script>
    $(document).ready(function(){
      $("#myButton").click(function(){
          $("#myModal").modal();
      });

      $('.carousel').carousel();

      $('.btnpopover').popover()


      // $('#login').click(function(){
      //   $.ajax({
      //     url: '/auth/ajaxLog',
      //     data: {
      //       "username": $('#username').val(),
      //       "password": $('#password').val()
      //     },
      //     success: function(response){
      //       console.log(response);
      //
      //       if(response == 'true'){
      //         alert('loggin succesful');
      //         window.location = '/profile';
      //       } else {
      //         alert('ERROR: '+ response);
      //       }
      //     }
      //   })
      // })

      $('#registration').click(function(e){
        console.log(e);
        e.preventDefault();
        let name = $('#name_reg').val();
        let password = $('#password_reg').val();
        let email = $('#email_reg').val();
        let captcha = $('#captcha_reg').val();
        //
        // alert(name);
        // alert(password);
        // alert(email);
        // alert(captcha);

        $.ajax({
          url: '/registration/getFromAjax',
          data: {
            "name": $('#name_reg').val(),
            "password": $('#password_reg').val(),
            "email": $('#email_reg').val(),
            "captcha": $('#captcha_reg').val()
          },
          success: function(response){
            console.log(response);

            if(response == 'true'){
              alert('Registration succesful');
              window.location = '/profile';
            } else {
              alert('ERROR: '+ response);
            }
          }
        })
      })

      $('#logout').click(function(){
        $.ajax({
          url: '/auth/ajaxLogout',
          data: {},
          success: function(response){
            alert('sesson closed');
            window.location = '/welcome';
          }
        })
      })

    });


    </script>

</body>

</html>
