
<?php
include('include/db.php');
if($_SERVER['REQUEST_METHOD'] ='post') {
if(isset($_post['register']) {
if(empty($_post['name']) || empty($_post['email']) || empty($_post['password'])) {
echo 'form will not be blank please make sure you filled it correct';
exit();
}
if(!filter_var($_post['email'], EMAIL_VALIDATION) {
echo 'invalid email';
exit();
}
$name = html_special_char($_post['name']);
$email = html_special_char($_post['email']);
$password = html_special_char($_post['password']);
$pasword = password_hash($password, PASSWORD_DEFAULT);
$tmt = $connect->prepare('INSERT INTO user(name,email,password) VALUE(?,?,?)');
$tmt->bind_param('sss', $name, $email, $password_hash);
$tmt->execute();
header('Location:login.php');
exit();
}
}
//login
?>
<?php
include('include/db.php');
if(isset($_post['login']) {
if(!empty($_post['email']); || !empty($_post['password'])) {
if(!filter_var($_post['email']) {
echo '<script>alert('invalid email');</script>';
$email = html_special_char($_post['email']);
$password  = html_special_char($_post['password']);
$password = password_hash($password, PASSWORD_DEFAULT);
stmt = $connect->prepare('SELECT*FROM username WHERE user = ?, || email = ?, && password = ?');
stmt->bind_param('sss' $name, $email, $password_hash);
$tmt->execute()
stmt = $connect->get_result();
if($result->num_row > o){
$_SESSION['userid'] = $user;
header('Location:dashboard.php');

}
} else{
echo 'invalid credential!';
header('Location:login.php');
?>