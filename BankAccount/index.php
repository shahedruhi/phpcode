<html>
<head>
	<title>Account Tranasction</title>
</head>
<body>
	<form>
		Customer Name:<input type = "text" name = 'customerNameText'><br/>
		Account No:<input type = "text" name = 'accountNumberText'><br/>
		<input type = "submit" value = "Create" name = 'createButtion'><br/>
		Amount:<input type = "text" name = 'amountText'><br/>
		<input type = "submit" value = "Deposite" name = 'depositeButtion'><br/>
		<input type = "submit" value = "Withdraw" name = 'withdrawButtion'><br/>
		<input type = "submit" value = "Show Report" name = 'showreportButtion'><br/>
	</form>	
	<?php
		require 'account.php';
		session_start();

		if (isset($_GET['createButtion']))
		{
			$account = new Account ($_GET['customerNameText'], $_GET['accountNumberText']);
			$_SESSION['an_account'] = $account;
			echo "Account Created";
		}

		if (isset($_GET['depositeButtion']))
		{
			$account = $_SESSION['an_account'];
			$account->deposit($_GET['amountText']);
			$_SESSION['an_account'] = $account;
			echo "Deposited";
		}
		
		if (isset($_GET['withdrawButtion']))
		{
			$account = $_SESSION['an_account'];
			echo $account->withdraw($_GET['amountText']);
			$_SESSION['an_account'] = $account;
		}

		if (isset($_GET['showreportButtion']))
		{
			$account = $_SESSION['an_account'];
			echo $account->get_name(). "<br/>";
			echo $account->get_number(). "<br/>";
			echo $account->get_balance(). "<br/>";
		
		}
				
	?>

</body>
</html>	