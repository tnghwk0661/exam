<?
if ( isLogined() === false ) {
	if ( isAjax() ) {
		$resultData = [
			'resultCode' => 'F-1',
			'msg' => '로그인 해주세요.'
		];

		echo json_encode($resultData);
	}
	else {
		?>
		<script>
		alert('로그인 해 주세요.');
		location.replace('login.php');
		</script>
		<?
	}
	exit;
}
?>