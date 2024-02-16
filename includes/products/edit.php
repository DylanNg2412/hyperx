<?php

    // make sure the user is logged in
    if ( !isAdminOrEditor() ) {
        // if is not logged in, redirect to /login page
        header("Location: /");
        exit;
    }

    // Step 1: connect to the database
    $database = connectToDB();

    // Step 2: get all the data from the form using $_POST
    $product_id = $_POST['product_id'];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $switch = $_POST["switch"];
    $status = $_POST["status"];

    // capture the image file
    $image_url = $_FILES["image_url"];


    // make sure that you only upload if image is available
    if ( !empty( $image_url['name'] ) ) {
        $target_dir = "uploads/";
        // add the image name to the uploads folder path
        $target_path = $target_dir . time() . '_' . basename( $image_url['name'] ); // uploads/892938829293_image.jpg
        // move the file to the uploads folder
        move_uploaded_file( $image_url["tmp_name"], $target_path );
    }

    // Step 3: error checking
    // 3.1 make sure all the fields are not empty
    if ( empty( $name ) || empty( $price ) || empty( $switch ) || empty( $status )) {
        setError( 'All the fields are required', '/manage-posts-edit?id=' . $product_id );
    } else {
            // Step 5: update the user data
            $sql = "UPDATE products SET name = :name, price = :price, status = :status, image_url = :image_url, switch = :switch WHERE id = :id";
            $query = $database->prepare( $sql );
            $query->execute([
                'name' => $name,
                'price' => $price,
                'image_url' => !empty( $image_url['name'] ) ? $target_path : $_POST['original_image'],
                'status' => $status,
                'switch' => $switch,
                'id' => $product_id
            ]);

            // Step 6: redirect back to /manage-users page
            $_SESSION["success"] = "Product has been updated successfully.";
            header("Location: /manage-products");
            exit;
        }