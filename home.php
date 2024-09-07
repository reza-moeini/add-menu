<?php 

// $a = 2;
// $b = 2;
//  if(! $b){
//     var_dump(! $b);
//  }




// $list [
//     1 => 'reza',
//     2 => 'ali'
// ];
// //         var_dump($list)

// $cars = [
//     "Volvo",
//     "BMW", 
//     "Toyota"
// ];
// var_dump($cars[0]);



// define ('TEST' , 'ALOOO');
//     var_dump(TEST);


    // const TEST = 'Reza';
    //     var_dump(TEST);

    // $name = '';

    // if($name =='reza'){
    //     var_dump('Welcome Reza');
   
    // }elseif($name =='ali'){
    //     var_dump('welcome Ali');
    // }else{
    //     var_dump('plz login!');
    // }



    // $name = 'amir';

    // switch($name){
    //     case  'reza':
            
          
    //         case 'amir':
    //             var_dump('welcome amir');
    //             var_dump('welcome reza');
    //             break;
    //                 case 'ali':
    //                     var_dump('welcome ali');
    //                     break;
    //                 default:
    //                     var_dump('plz login!');
    // }


    // $name = 'reza';
    //     switch($name){
    //         case 'ali':
    //              case 'reza':
    //             var_dump('welcome ali');
    //              var_dump('welcome reza');
    //                         break;   
    //                         case 'alireza' :
    //                             var_dump('welcome alireza');
    //                                 break;
    //                                 default:
    //                                     var_dump('plz login');
    //             }


        // $item = [1,2,3,4,5,6,7,8,9,10];

        //     $i=0;
        //         while($i < 10){
        //                       echo $item[$i] . '<br>';
        //                 // var_dump($item[$i]) . '<br>';
        //             $i++;
        //         }

        // $name = '';
        //     switch($name){
        //         case 'ali':
        //             var_dump('welcome ali');
        //                 break;
        //                 case 'reza':
        //                     var_dump('welcome reza');
        //                         break;
        //                         default : 
        //                         var_dump('plz login!!');
        //                 }
            // $items = [1,2,3,4,5,6,7,8,9,10];
            //     for ($i = 9 ; $i >= 0 ;  $i--){
            //         echo $items[$i] . '<br>';
            //     }

            
            // foreach($items as $key=> $value){
            //     // echo 'Key :'. $key .''. $value . '<br>';
            //     echo "Key : $key , $value  <br>";
            // }

                // for ($i=9 ; $i >= 0 ; $i--){
                //     echo ($items[$i]) . '<br>';
                // }

                    // function first (){
                    //     echo 'Hello Reza';
                    // }
                    //  first();

                   /*  function sum($a , $b){
                        echo($a + $b);
                    }
                    sum(1 , 6);  */


                    // $number1 = 2;
                    // $number2 = 4;
                    // function number_sum($number1 , $number2){
                    // $result = $number1 + $number2;
                    //  return $result;
                     
                    // }
                    
                    // echo number_sum($number1, $number2);

                //     function test ($a , $b){
                //         $num1 = $a + $b;
                //         $num2 = $a * $b;
                //          return 
                //          [ $num1 , $num2 ];
                         
                //     }
                //  list($num1 , $num2) = test (5 , 6);
                // //     var_dump($num2);

                // declare (strict_types = 1);

                // function sum(int $a ,int  $b) : array{
                //         $num1 = $a + $b;
                //         $num2 = $a * $b;
                //        return[$num1 , $num2];
                // }
                     
                // list ($num1 , $num2) = sum (5 , 6);
                //     var_dump($num1 , $num2);

                // function sum($a , $b , $c){
                //     return $a + $b + $c;
                // }
                //     $list = [1 , 2 , 3];
                //         var_dump(sum(...$list));

                //  $a = 5 ; 
                //  $b = 6 ;

                //     function sum(){

                //        global $a;
                //        global $b; 
                //        var_dump($a + $b);
                //     }
                //     sum();

            //     $list = [1 , 2 , 3 , 4 , 5];

            //     function map ($list , $func){

            //             $newlist = [];
            //             foreach($list as $key => $item){
            //                 $newlist [$key] = $func($item);
            //             }
            //             return $newlist;
            //     }
            

            //   var_dump(map($list , function ($num){
            //     return $num * 2 ;
            //   }));

            // $c = 10;
            // $sum = fn($a , $b) => $a + $b + $c;
            //     var_dump($sum(1 , 4));

            // $text = '<p> heloo</p> <span>Salam Reza </span>';
            //     var_dump(strip_tags($text , 'p'));


            // $list = [
            //     'name' => 'Reza',
            //     'family' => 'Moeini',
            // ];
            // $list2 = [
            //     'age'=> '26',
            //     'country'=> 'US'
            // ];

            // var_dump(array_merge($list , $list2));


            // $text = 'Reza';
            // var_dump(str_replace('Reza' , 'Jafari' , $text));


            // $point = [
            //     'amir' =>'25',
            //     'reza' =>'20',
            //     'abass' => '32',
            // ];
            //     ksort($point);
            //         var_dump($point);


        //     $users =[
        //      [
        //         'name' => 'Reza',
        //         'age' => 67,
        //         'country' => 'Iran',
        //     ],
        //     [
        //         'name' => 'Ali',
        //         'age' => 53,
        //         'country' => 'United-Kingdom',
        //     ],
        //     [
        //         'name' => 'Abas',
        //         'age' => 43,
        //         'country' => 'United-Stats',
        //     ],
    
        // ];
    
        //     // foreach($users as $user){
        //     //     foreach($user as $item){

        //     //     echo $item;
        //     //     };
      
        //     // };

        // //    $list = array_filter($users , function ($user){
        // //         return $user ['age']>43;
        // //     });
        // //     var_dump($list);

        // $list = array_filter($users, function ($user){
        //     return $user ['age']>43;
        // });
        // var_dump ($list);



    //         $users =[
    //          [
    //             'name' => 'Reza',
    //             'age' => 67,
    //             'country' => 'Iran',
    //         ],
    //         [
    //             'name' => 'Ali',
    //             'age' => 53,
    //             'country' => 'United-Kingdom',
    //         ],
    //         [
    //             'name' => 'Abas',
    //             'age' => 43,
    //             'country' => 'United-Stats',
    //         ],
    
    //     ];


    //    $new = array_filter($users , function ($user){
    //     return $user ['age']>53;
    //    });
    //     var_dump($new);


    $users = [
        [
            'Name' => 'Mohammad Reza',
            'Age' => '36',
            'Country' => 'Iran'
        ],
        [
            'Name' => 'Ali',
            'Age' => '52',
            'Country' => 'United Stats'
        ],
        [
            'Name' => 'Alireza',
            'Age' => '68',
            'Country' => 'United Kingdom'
        ],
        [
            'Name' => 'Arshia',
            'Age' => '22',
            'Country' => 'United Stats'
        ],
        
    ];

    $new =  array_filter($users , function ($user){
      return $user ['Country'] == 'United Stats';
    });
    var_dump($new);