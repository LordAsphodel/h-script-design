{strip}
{assign 
	var='info_msg'
	value=
		[
			'Completed'		=>'Completed',
			'Saved'			=>'Saved',
			'Canceled'		=>'Canceled',
			'Added'			=>'Added',
			'Deleted'		=>'Deleted',

			'LogIn'			=>'Logged in',
			'LogOut'		=>'Logged out',

			'*NoSelected'	=>'Select at least one element',
			'*CantComplete'	=>'Operation can not be completed',
			'*AlreadyUsed'	=>'Data is already in use',
			'*Error'		=>'Operation completition error',
			'*ErrorCode'	=>'Error Code',
			'*NoPage'		=>'Page is not found',

			'*Denied'		=>'Acces denied'
		] 
	scope='global'
}
{/strip}
