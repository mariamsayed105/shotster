<?php
<!-- //check if the user is logged in -->
if(isset($_SESSION['shoster_userid'])&&is_numeric($_SESSION['shoster_userid']))
{
    $id= $_SESSION['shoster_userid'];
    $login= new Login();
    $result=$login->check_login($id);
    if($result)
    {
        //users data retrive
        $user= new User();
        $user_data= $user-> get_data($id);
        if(!$user_data)
        {
            header("Location:login.html");
            die;
        
        }
    }else
    {
        header("Location:login.html");
        die;
    }
} else
{
    header("Location:login.html");
    die;
}
//post starts here
if($_SERVER['REQUEST_METHOD'] == "POST")
{
print_r($_POST);
}
class post {
    private $error = "";
    public function create_post($userid, $data)
    {
        if(!empty($data['post']))
        {
         $post = addslashes($data['post']);
         $id = $_SESSION['shotster_userid'];
        }
        else
        {
            $this->error .= "Please type something to post!<br>"
        }
        return $this->error;
    }
}
?>
<html><head>
    <style>

    </style>
</head>
    <body>
        
  <div style="min-height: 400px;flex:2.5;padding: 20px;padding-right: 0px;">
<div style="border: solid thin #aaa; padding: 10px;background-color: white;">
<form method="post">

    <textarea name="post" placeholder="Whats on your mind?"></textarea>
    <input id="post_button" type="submit" value="Post">
    <br>
</form>
</div>
<div id="post_bar">

</div>
</div>
</body>
</html>