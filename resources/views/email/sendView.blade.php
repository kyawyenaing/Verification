
<p>To verify your email , 
<a href="{{ route('sendEmailDone',["email"=>$user->email, "verifyToken"=>$user->verifyToken])}}">Click Here</a></p>