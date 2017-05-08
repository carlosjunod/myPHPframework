<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Framework - <?php echo $data['title']; ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="../assets/css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
  <form class="form" action="index.html" method="post" enctype="text/plain" style="background-color:rgba(0,0,0,.1); padding:50px 30px 30px 30px; text-align:right; position:absolute; width:100%; z-index:2;">
      <input type="text" name="username" value="" placeholder="username"  id="username"/>
      <input type="password" name="password" value=""  id="password"/>
      <button type="button" name="button" class="btn btn-primary">log in</button>
      <a id="login">log in</a>
  </form>
