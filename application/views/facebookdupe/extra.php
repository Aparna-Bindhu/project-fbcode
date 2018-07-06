

id ( primarykey auto increment )
small letter
user_id

signup_date
activation_code    


$code = md5(date);

$link = "http://www.makemags.com.?email=".$email."&code=".$code;