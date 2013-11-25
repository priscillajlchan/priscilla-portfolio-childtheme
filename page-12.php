<?php
/**
 * This template will be used to display page content.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">

    <section id="content">
        

    <?php
        $action=$_REQUEST['action'];
        if ($action=="")    /* display the contact form */
    {
    ?>
<div id="form">
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <br>
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    <br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    <br>
    Your message:<br>
    <textarea name="message" rows="10" cols="30"></textarea><br>
    <br>
    <input type="submit" value="Send email"/>
    </form>
</div>
    
    <?php
    } 
        else  /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        
        mail( $email, $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>

        
        </section><!-- #content --> 



</div><!-- #main -->

<?php get_footer(); ?>






