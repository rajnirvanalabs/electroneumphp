<?php
/* Modified to work with Electroneum (ETN) - Cryptocurrency Payment */
/* Author - Nirvana Labs */
/* Author URI - http://nirvanalabs.com */

/* Example of Electroneum Payment  */
 require_once('src/jsonRPCClient.php');
 require_once('src/Electroneum_RPC.php');

/* Edit it with your ip and your port of Electroneum RPC */
$electroneum_rpc = new Electroneum_RPC('http://127.0.0.1','18082');

?>
<html>
  <body>
    <h1>Example of Electroneum Library</h1>
	<p>Welcome to Electroneum PHP and JSON Library, modified by Nirvana Labs to work with Electroneum! Please report any issue <a href="https://github.com/rajnirvanalabs/electroneumphp/issues">here</a></p>
  <p>Original Author Credits goes to SerHack</p>

	<h2>Informations</h2>
    <h3>Electroneum Address</h3>
    <?php $address = $electroneum_rpc->getaddress();
	$electroneum_rpc->_print($address); ?>
    <h3>Balance</h3>
    <?php $balance = $electroneum_rpc->getbalance();
	 $electroneum_rpc->_print($balance); ?>
	<h3>Height</h3>
	<?php $height = $electroneum_rpc->getheight();
		$electroneum_rpc->_print($height); ?>
	<h3>Incoming transfers</h3>
	<h4>All</h4>
	<?php $incoming_transfers = $electroneum_rpc->incoming_transfer('all');
		$electroneum_rpc->_print($incoming_transfers); ?>
	<h4>Available</h4>
	<?php $available = $electroneum_rpc->incoming_transfer('available');
		$electroneum_rpc->_print($available); ?>
	<h4>Unavailable</h4>
	<?php $unavailable = $electroneum_rpc->incoming_transfer('unavailable');
		$electroneum_rpc->_print($unavailable); ?>
	<h3>Get transfers</h3>
	<?php $get_transfers = $electroneum_rpc->get_transfers('pool', true);
		$electroneum_rpc->_print($get_transfers); ?>
	<h3>View key</h3>
	<?php $view_key = $electroneum_daemon->view_key();
		$electroneum_rpc->_print($view_key); ?>
<?php
	/*
	 *	Available Function
	 * --------------------------------------------------------------------
	 *	make_integrated_address => make a integrated address
	 *	$electroneum_daemon->make_integrated_address('');
	 * --------------------------------------------------------------------
	 *	split_integrated_address => Retrieve integrated address
	 *	$integrated_address = integrated address
	 *	$electroneum_daemon->splt_integrated_Address($integrated_address);
	 * --------------------------------------------------------------------
	 *	make_uri => useful for generating uri like electroneum:9aksi1o2...
	 *	$address = wallet address string
	 *	$amount (optional) = amount (library will convert into atomic unit, then use 1 etn)
	 * 	$recipient_name (optional) = string name of the payment recipient
	 *	tx_description (optional) = string describing the reason for the tx
	 *	$electroneum_rpc->make_uri($address, $address, $amount, $recipient_name, $description);
	 * --------------------------------------------------------------------
	 *	parse_uri => parse the uri
	 * 	$uri = the uri
	 *	$electroneum_rpc->parse_uri($uri);
	 * --------------------------------------------------------------------
	 *	get_payments => Get a list of incoming payments using a given payment id (useful for verifying payment with plugins)
	 * 	$payment_id = id of payment
	 *	$electroneum_rpc->get_payments($payment_id);
	 * --------------------------------------------------------------------
	 *	transfer => transfer function
	 * 	$amount = amount
	 *	$address = wallet address (not your address)
	 *	$electroneum_rpc->transfer($amount, $address);
	 * --------------------------------------------------------------------
	 *	get_bulk_payments => Get a list of incoming payments using a given payment id or height
	 * 	$payment_id = array of payments id
	 *	$min_block_height = The block height at which to start looking for payments.
	 *	$electroneum_rpc->get_bulk_payments($payments_id, $min_block_height);
	 *
	*/
	?>
  </body>
</html>
