<?php

  // // make sure the user is logged in
  // if ( !isUserLoggedIn() ) {
  //   // if is not logged in, redirect to /login page
  //   header("Location: /login");
  //   exit;
  // }

  // // make sure only admin can see this page
  // if ( !UserIsAdmin() ) {
  //   // if is not admin, then redirect the user back to /dashboard
  //   header("Location: /dashboard");
  //   exit;
  // }

  // Step 1: connect to the database
  $database = connectToDB();

  // Step 2: get todo id from the post 
  $user_id = $_POST["user_id"];

  // Step 3: delete the todo from the database using todo ID
    //3.1 sql command
    $sql = "DELETE FROM users WHERE id = :id";
    //3.2 prepare
    $query = $database->prepare($sql);
    //3.3 execute 
    $query->execute([ 'id' => $user_id ]);

  // confirm user deletion
  $_SESSION["success"] = "User deleted.";

 // Step 4 redirect back to page 
    header("Location: /manage-users");
    exit;
  ?>