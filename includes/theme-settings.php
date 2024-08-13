
<?php
function mytheme_settings_page()
   {
   $my_option = get_option('my_data'); 
    $text1 = '';
    $text2 = '';
    $text3 = '';
    $text4 = '';
    $text5 = '';
    $text6 = '';
    $text7 = '';
    $text8 = '';
    $text9= '';
    $text10 = '';
    $text11= '';
    $text12 = '';
    $image1 = '';
    $image2 = '';
   
  
   
   
    if(is_array($my_option)  && isset($my_option['text1'] ) && isset($my_option['text2'])  && isset($my_option['text3'])  && isset($my_option['text4'])  && isset($my_option['text5'])
    && isset($my_option['text6']) && isset($my_option['text7']) && isset($my_option['text8'])  && isset($my_option['text9'])  && isset($my_option['text10'])  && isset($my_option['text11'])  && isset($my_option['text12'])
  && isset($my_option['image1'])  && isset($my_option['image2'])  ){

     $text1 = $my_option['text1'];   
     $text2 = $my_option['text2']; 
     $text3 = $my_option['text3']; 
     $text4 = $my_option['text4']; 
     $text5 = $my_option['text5']; 
     $text6 = $my_option['text6']; 
     $text7 = $my_option['text7'];
     $text8 = $my_option['text8'];
     $text9 = $my_option['text9'];
     $text10 = $my_option['text10'];
     $text11 = $my_option['text11'];
     $text12 = $my_option['text12'];
     $image1 = $my_option['image1'];
     $image2 = $my_option['image2'];
   
    
    
  
    }
if(isset($_POST['save_btn']) && $_SERVER['REQUEST_METHOD'] == "POST") {

$text1 = isset($_POST['text1']) ? sanitize_text_field($_POST['text1'])  : '';
$text2 = isset($_POST['text2']) ? sanitize_text_field($_POST['text2'])  : '';
$text3 = isset($_POST['text3']) ? sanitize_text_field($_POST['text3'])  : '';
$text4 = isset($_POST['text4']) ? sanitize_text_field($_POST['text4'])  : '';
$text5 = isset($_POST['text5']) ? sanitize_text_field($_POST['text5'])  : '';
$text6 = isset($_POST['text6']) ? sanitize_text_field($_POST['text6'])  : '';
$text7 = isset($_POST['text7']) ? sanitize_text_field($_POST['text7'])  : '';
$text8 = isset($_POST['text8']) ? sanitize_text_field($_POST['text8'])  : '';
$text9 = isset($_POST['text9']) ? sanitize_text_field($_POST['text9'])  : '';
$text10 = isset($_POST['text10']) ? sanitize_text_field($_POST['text10'])  : '';
$text11 = isset($_POST['text11']) ? sanitize_text_field($_POST['text11'])  : '';
$text12 = isset($_POST['text12']) ? sanitize_text_field($_POST['text12'])  : '';
$image1 = isset($_POST['image1']) ? sanitize_text_field($_POST['image1'])  : '';
$image2 = isset($_POST['image2']) ? sanitize_text_field($_POST['image2'])  : '';



update_option('my_data',array(
  
    'text1' => $text1,
    'text2' => $text2,
    'text3' => $text3,
    'text4' => $text4,
    'text5' => $text5,
    'text6' => $text6,
    'text7' => $text7,
    'text8' => $text8,
    'text9' => $text9,
    'text10' => $text10,
    'text11' => $text11,
    'text12' => $text12,
    'image1' => $image1,
    'image2' => $image2,
  
   
   

));
}




 ?>



<div class="theme_settings">
<h1>Change your Content from here with ease</h1>
<!--form  setting-->
<div class="box1">


<form action="" method ="post">
    <!-- for phone number setting -->
    
    <div class="main">
    <div class="child1">
    <label for="text1">Phone Number</label>
    </div>
    <div class="child2">
        
    <input type="text" id= "text1" name = "text1" value="<?php echo ($text1);?>"></div>

<!-- for email setting -->
<div class="main2">
<div class="child3">
<label for="text2">Email</label>
    
</div>

<div class="child4">
<input type="text" id= "text2" name = "text2" value="<?php echo ($text2);?>"></div>

</div>
<div class="btn">
<button type="submit" value="save" class="btn btn-primary" name = "save_btn">update settings</button>
</div>


<!-- for paragraph -->




</div>



<div class="box4">
    <h4>Enter your text here</h4>
    <div class="child3">
<label for="text3"></label>
    
</div>

<div class="child4">
<input type="text" id= "text3" name = "text3" value="<?php echo ($text3);?>"></div>
<div class="child3">
<label for="text4">Enter your paragrapg here</label>

</div>
<textarea name="text4" id="text4" cols="40" rows="6"><?php echo ($text4);?></textarea>

</div>

<div class="box4">
    <h4>Enter your text here</h4>
    <div class="child3">
<label for="text5"></label>
    
</div>

<div class="child4">
<input type="text" id= "text5" name = "text5" value="<?php echo ($text5);?>"></div>
<div class="child3">

<label for="text6">Enter your paragrapg here</label>

</div>
<textarea name="text6" id="text6" cols="40" rows="6"><?php echo ($text6);?></textarea>

</div>





<div class="box4">
    <h4>Enter your text here</h4>
    <div class="child3">
<label for="text5"></label>
    
</div>

<div class="child4">
<input type="text" id= "text7" name = "text7" value="<?php echo ($text7);?>"></div>
<div class="child3">

<label for="text6">Enter your paragrapg here</label>

</div>
<textarea name="text8" id="text8" cols="40" rows="6"><?php echo ($text8);?></textarea>

</div>



<div class="box4">
    <h4>Enter your text here</h4>
    <div class="child3">
<label for="text5"></label>
    
</div>

<div class="child4">
<input type="text" id= "text9" name = "text9" value="<?php echo ($text9);?>"></div>
<div class="child3">

<label for="text10">Enter your paragrapg here</label>

</div>
<textarea name="text10" id="text10" cols="40" rows="6"> <?php echo ($text10);?></textarea>

</div>



<div class="box4">
    <h4>Enter your text here</h4>
    <div class="child3">
<label for="text5"></label>
    
</div>

<div class="child4">
<input type="text" id= "text11" name = "text11" value="<?php echo ($text11);?>"></div>
<div class="child3">

<label for="text12">Enter your paragrapg here</label>

</div>
<textarea name="text12" id="text12" cols="40" rows="6"><?php echo ($text12);?></textarea>

</div>




<!-- for image1 -->
<div class="img1">
<input  type="text" name="image1" class="meta-image" value="<?php  echo esc_url($image1) ?>" /> <br>
</div>
<div class="btn">
      <input type="button" id="head-brow" class="button image-upload" value="Browse Files"/>
      </div>
    

<!-- for image2 -->
<div class="img2">
<input  type="text" name="image2" class="meta-image1" value="<?php  echo esc_url($image2) ?>" /> <br>
</div>
<div class="btn">
      <input type="button" id="head-brow" class="button image-upload1" value="Browse Files"/>
      </div>















  






</form>







</div>
     <?php
   }
