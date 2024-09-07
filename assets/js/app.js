
// // jQuery(document).ready(function(){

// //     //    jQuery('.name-text').hide();
// //     //      jQuery('#submit-btn').hide();
// //     // jQuery(".name-text , #submit-btn").hide();
  
// //     // let logo = jQuery('#submit-btn');
// //     //     logo.hide();


// //     //     let btn = jQuery('.name-text');

// //     //     btn.hide();

// //     // jQuery('#submit-btn').click(function(){

// //     //     alert('submit pressed')
// //     // });
       
// // // jQuery('#submit-btn').submit(function (e) { 
// // //     e.preventDefault();
// // //         alert('submit pressed')
// // // });
      
// // //    jQuery('.name-text').mouseenter(function () { 


// // //         alert('hello')
// // //    });

// // });

// // jQuery(document).ready(function () {
    
// //     // jQuery('.name-text').hide();
// //     // jQuery('#submit-btn1').click(function (e) { 
// //     //     e.preventDefault();
// //     //         alert('your information has been saved')
// //     // });

// // // jQuery('.name-text').mouseenter(function () { 
// // //     alert('You hoverd on the textbox')
// // // });

// //     // jQuery('#submit-btn').submit(function (e) { 
// //     //     e.preventDefault();
// //     //         alert('you successfully submited the form')
// //     // });
// //     // jQuery('#submit-btn1').click(function (e) { 
// //     //     e.preventDefault();
        
// //     //     let section = jQuery('.top-section');
// //     //    jQuery('.top-section').toggle(); 

// //     // });


// //     // jQuery('#submit-btn1').click(function (e) { 
// //     //     e.preventDefault();
        
// //     // //     let section = jQuery('.top-section');
// //     // //         section.toggle();
   
// //     //     // let section = jQuery('.top-section');
// //     //     //     section.fadeOut(2000);
// //     //     //     section.fadeIn(2000);

// //     //     //   let section = jQuery('.top-section'); 

// //     //     //   section.slideDown(2000);
// //     //     //   section.slideUp(2000);


// //     //     jQuery('.top-phone').animate({
// //     //         opacity: .3,

// //     //     });
// //     // });

// //             // let submit = jQuery('#submit-btn1');


// //             //   submit.click(function (e) { 
// //             //         e.preventDefault();
                    
// //             //         jQuery('.top-phone').animate({
// //             //             opacity: .3,
// //             //             bottom: '100px',
// //             //         });
// //             //     });


// // });


//     // jQuery(document).ready(function () {
        
//     //    jQuery('#submit-btn1').click(function (e) { 
//     //     e.preventDefault();
//     //         let section = jQuery('.top-section');
//     //         section.toggle(2000);
//     //    });

//     // });    

//     jQuery(document).ready(function () {

//         //     let button = jQuery('#submit-btn1');
//         // button.click(function (e) { 
//         //     e.preventDefault();
            
//         //   let text =  jQuery('.form-title').text();
//         //     alert(text);
//         // });

// // let submit = jQuery('#submit-btn1');
// //         submit.click(function (e) { 
//             // e.preventDefault();
//                 // let text = jQuery('.form-title').html();
//                 // alert(text);
      
//             // let val= jQuery('.lname-text').val();
//             //         alert(val);
//             //     });

        //     let submit = jQuery('#submit-btn1');
        //    submit.click(function (e) { 
        //         e.preventDefault();
        //         let val = jQuery('.lname-text').val();
        //         let text = jQuery('.form-title').text(val);
        
        //     });
      

//             // jQuery('#submit-btn1').click(function (e) { 
//             //     e.preventDefault();
//             //     let text = jQuery('.form-title').append(' متن آزمایشی');

//             // });


//             });
// jQuery(document).ready(function () {
    
//     let submit = jQuery('#submit-btn1').click(function (e) { 
//         e.preventDefault();
        
//         let text = jQuery('.lname-text').val();
//         jQuery('.form-title').prepend(text);
//     });
// }); 


// jQuery(document).ready(function () {
// //     let submit = jQuery('#submit-btn1').click(function (e) { 
// //         e.preventDefault();
        
// //     //         let text_show =jQuery('.lname-text').val();
// //     //         jQuery('.showing').text(text_show);
   
            
// //             let test = jQuery('.lname-text').val();
// //             jQuery('.form-title').append(test);

// // });
//     jQuery('#submit-btn2').click(function (e) { 
//         e.preventDefault();
//             // let val = jQuery('.lname-text,.name-text').val();
//             jQuery('.lname-text').empty();
//     }); 

    


// });


// jQuery(document).ready(function () {

    
//         jQuery('#submit-btn2').click(function (e) { 
//             e.preventDefault();
//             let text = jQuery('.lname-text-title').val();
//                 jQuery('text').empty(text);
//         });
    
// });



// jQuery(document).ready(function () {
    
//     jQuery('#rules').change(function (e) { 
//             jQuery('body').toggleClass('night');
            
//         });
//     });

//         jQuery('#rules').change(function (e) { 
//                 jQuery('span').css({
//                     'color': '5red',
//                 }
                    
//                 );
            

//         });

// // });
// jQuery(document).ready(function () {
//         jQuery('#rules').change(function (e) { 
//             jQuery('body').toggleClass('night');
//         });
// });

// $(document).ready(function () {
//     jQuery('#rules').change(function (e) { 
//         jQuery('span').css({
//             'color': 'red',
//             'margin-bottom': '20px',
//         }
//         );
        
//     });
// });



// jQuery(document).ready(function () { 
    
//     jQuery('#rules').change(function (e) { 
//         jQuery('body').toggleClass('night');
//     });


// });

// jQuery(document).ready(function () {
//     jQuery('#submit-btn1').click(function (e) { 
//         e.preventDefault();
//         // localStorage.setItem('testkey','afraashop');
//         // let test = localStorage.getItem('testkey');
//         // console.log(test);
//         localStorage.removeItem('testkey');
        
//     });
// });



// jQuery(document).ready(function () {
  
 

  
  
//     jQuery('#rules').change(function (e) {      
//     if (this.checked) {
//             jQuery('body').addClass('night');
//             localStorage.setItem('theme','dark');
//         } else {
//             jQuery('body').removeClass('night');
//             localStorage.removeItem('theme');

//         }

//     });

//     let theme = localStorage.getItem('theme');
//     // if(theme){
//         if(theme == 'dark'){
//             jQuery('body').addClass('night');
//             jQuery('#rules').attr('checked' , 'checked');
//          } else{
//                     jQuery('body').removeClass('night');
//                 }
//     // }
// });



// jQuery(document).ready(function () {

//     jQuery('#rules').change(function (e) { 
        
//         if (this.checked) {
//             jQuery('body').addClass('night');
//           localStorage.setItem('theme' , 'dark');
//         } else {
//             jQuery('body').removeClass('night');
//            let theme =  localStorage.removeItem('theme' , 'dark');

//         }
 

//     });


//     let theme = localStorage.getItem('theme');
//         if (theme == 'dark') {
//             jQuery('body').addClass('night');
//             console.log(theme);
//             jQuery('#rules').attr('checked','checked');

//         } else {
//             jQuery('body').removeClass('night');

//         }
// });
// $(document).ready(function () {
//     $('#rules').change(function (e) { 
//             if(this.checked){
//                     $('body').addClass('night');
//                     localStorage.setItem('theme','dark');
//             }else{
//                 $('body').removeClass('night');
//                 localStorage.removeItem('theme','dark')
//             }
        
//     });


//     let theme = localStorage.getItem('theme','dark');
//     if (theme =='dark') {
//         $('#rules').attr('checked','checked');
//         $('body').addClass('night');
//     } else {
//         $('body').removeClass('night');
//         localStorage.removeItem('theme','dark')
//     }
// });

let j = $.noConflict();
j(document).ready(function () {

   j('#btn_1').submit(function (e) { 
        e.preventDefault();
        
        let name = j('#name').val();
        let lname = j('#lname').val();
        let password = j('#password').val();

        $.ajax({
            type: "POST", 
            url: "register.php",
            data: {
                name : name,   
                lname : lname,
                password : password,
            },
            beforeSend: function(){

            },
            success: function (response) {
                
            },
            error: function (response) {
            
            },
            compelte: function (response) {

            },
        });
        
    });




});


    //  jQuery(document).ready(function () {
    //     jQuery('#submit-btn').submit(function (e) { 
    //         e.preventDefault();
  
    //          let val =  jQuery('.lname-text').val();
             
    //         jQuery('.form-title').text(val);
    //         });
    //  });
