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
    });

    $('#login').click(function(){
      console.log("clicked");

      $.ajax({
        url: '/welcome/ajaxLog',
        data: {
          "username": $('#username').val(),
          "password": $('#password').val()
        },
        success: function(response){
          console.log(response);

          if(response == 'true'){
            console.log('is logged');
          } else {
            console.log('is NOT logged');
          }
        }
      })
    })


    </script>

</body>

</html>
