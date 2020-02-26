<html>
<head>
  <title>Users</title>
</head>
<body>
      		
        <ul>	@foreach($users as $user)
                  	<li>{{ $user->name }}</li>
                    <li>{{ $user->password }}</li>
            	@endforeach
        </ul>         
</body>
</html>