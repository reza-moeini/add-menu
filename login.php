<?php


// var_dump($_GET);

// if (isset($_GET['username']) && isset($_GET['password'])){

// var_dump($_GET);
//     echo "Logged In";
//  } else{
//             echo "UserName Is Not Exist";
//         };

// if(isset($_POST['username']) && isset($_POST['password'])){
//     echo "Logged in";
// }else{
//     echo "You are not logged in yet";
// }
//                if (isset($_FILES['image']))
             

//                if(! is_dir('uploads')){
//                 mkdir('uploads');
          

//                $path = 'upload/' . $_FILES ['image']['name'];
//                 if (move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
//                     echo 'file uploaded';
//                 }else{
//                     echo "file not exist!";
//                 }
//             }
//  ?>
<!-- 
        <?php if(isset($_POST['username'])){ ?>
                  <h2> <?php echo $_POST['username'] ?> </h2>  

               <?php } ?> -->


<?php



            
                
                    // if (isset($_FILES['image'])){



                    //     $path = 'uploads/' . $_FILES['image']['name'];
                            
                    //         if(! is_dir('uploads')){
                    //             mkdir('uploads');
                    //         }


                    //         if(move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
                    //             echo 'file uploaded';
                    //         }else{
                    //             echo 'Error!';
                    //         }
                    // }else{
                    //     echo 'file is not exist';
                    // }
            
                        
                    // var_dump($_SERVER["SERVER_NAME"]);

                    // if(isset($_FILES['image'])){

                    //     if(! is_dir('uploads')){
                    //         mkdir('uploads');
                    //     }

                    //     $path = 'uploads/' . $_FILES['image']['name'];

                    //     if(move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
                    //         echo 'file uploaded';
                    //     }else{
                    //         echo 'error!';
                    //     }

                    // }else{
                    //     echo'file is not exist';
                    // }
                   
//                     if (isset($_FILES['image'])){

//                         $path = 'uploads/' . $_FILES['image']['name'];
//                             if(! is_dir('uploads')){
//                                 mkdir('uploads');
//                             }
//                             if(move_uploaded_file($_FILES['image']['tmp_name'] , $path)){
//                                 echo 'File uploaded';
//                             }else {
//                                 echo 'Error !!';
//                             }
//                     }else {
//                         echo 'file does not exist';
//                     }


// ?>

<!-- 
// <html>
//     <head></head>
//     <body>
//                     <form action="login.php" method="POST" enctype="multipart/form-data">
//                     <input type="file" name="image">
//                         <button type="submit">upload</button>
//                     </form>

//     </body>
// </html> -->

            <?php


                    // var_dump($_COOKIE);
                    // setcookie(
                    //     'locID',
                    //     'localhost',
                    //     [
                    //         'expires' => time() + 60 ,
                    //         'domain' => 'localhost',
                    //         'path' => '/',
                    //         'httponly' => true,
                    //     ]
                    // );

                    session_start([
                        'name' => 'afraa',
                    ]);

                    // $_SESSION['site_nam'] = 'localhost';

                    // var_dump($_SESSION);



                 if(isset($_SESSION['view'])){
                    $_SESSION['view']++;
                 }else{
                    $_SESSION['view']=0;
                 }
                 unset($_SESSION['view']);

                 var_dump($_SESSION['view']);

                


                    ?>