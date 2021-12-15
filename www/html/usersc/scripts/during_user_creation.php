<?php
// needed for cloneClient()
require_once __DIR__."/../../site.php";
require_once SITE_ROOT.'/app/includes/clients.php';

$log = fopen('login.log', 'a+');    
// This script is really useful for doing additional things when a user is created.

// You have access to two things that will really be helpful.
//
// You have the new user id for your new user. Comment out below to see it.
// dump($theNewId);

//You also have access to everything that was submitted in the form.
// dump($_POST);

//If you added additional fields to the join form, you can process them here.
//For example, in additional_join_form_fields.php we have a sample form field called account_id.
// You may wish to do additional validation, but we'll keep it simple. Uncomment out the code below to test it.

// The format of the array is ['column_name'=>Data_for_column]

// $db->update('users',$theNewId,['account_id'=>Input::get('account_id')]);

// You'll notice that the account id is now in the database!

// Even if you do not want to add additional fields to the the join form, this is a great opportunity to add this user to another database table.
// Get creative!

// The script below will automatically login a user who just registered if email activation is not turned on
//PLEASE NOTE: This will also run during the user creation process that happens when the admin creates a user which is good, except you could
//find yourself logged in as the user you just created.  :)
// $e = $db->query("SELECT email_act FROM email")->first();
// if($e->email_act != 1 && !$user->isLoggedIn()){
//   $user = new User();
  // $login = $user->loginEmail(Input::get('email'), trim(Input::get('password')), 'off');
  // if(!$login){Redirect::to('login.php?err=There+was+a+problem+logging+you+in+automatically.');}
  //where the user goes just after login is in usersc/scripts/custom_login_script.php
// }

fwrite($log, print_r($_POST, TRUE));

// set the account_owner to the user_id.
$db->update('users',$theNewId,['account_owner'=>$theNewId]);

// get all the extra fields to put into JSON column
$jsonArray=array(
	'hope'=>Input::get('hope'),
	'tools'=>Input::get('tools'),
	'chapters'=>Input::get('chapters'),
	'given'=>Input::get('given'),
	'cell'=>Input::get('cell'),
	'city'=>Input::get('city'),
	'state'=>Input::get('state'),
	'hvac'=>Input::get('hvac'),
	'hope1'=>Input::get('hope1'),
	'hope1other'=>Input::get('hope1other'),
	'script'=>Input::get('script'),
	'toolsOther'=>Input::get('toolsOther'),
	'size'=>Input::get('size'),
	'close'=>Input::get('close'),
	'blowerDoorOptions'=>Input::get('blowerDoorOptions'),
	'calcRun'=>Input::get('calcRun'),
	'calcComp'=>Input::get('calcComp'),
	'knew'=>Input::get('knew'),
	'readRate'=>Input::get('readRate'),
	'commit'=>Input::get('commit') );
$json=JSON_ENCODE($jsonArray);

$fields=array(
	'signup'=>$json,
	'userid'=>$theNewId,
	'source'=>Input::get('source'),
	'spark'=>Input::get('spark'),
	'appeal'=>Input::get('appeal'),
	'process'=>Input::get('process'),
	'blowerDoor'=>Input::get('blowerDoor'),
	'loadCalc'=>Input::get('loadCalc'),
	'feedback'=>Input::get('feedback'),
	'ad'=>Input::get('ad') );
$db->insert('contractors',$fields);

// add user fields
$myUser=array();
$myUser = $db->findById($theNewId,"users");
$myFields = (array)$myUser->first();

$myArray=array(
	'username'=>$myFields['username'],
	'firstName'=>$myFields['fname'],
	'lastName'=>$myFields['lname'],
	'email'=>$myFields['email'] );
$fields = array_merge($myArray,$fields);

fwrite($log, print_r($fields, TRUE));

	// duplicate testie McTestface client to new users account as an example
	$clone = cloneClient(19,$theNewId); // cloneClient($source,$account)
fwrite($log, "\nClone of 19 created as client id " . $clone);

$to = rawurlencode('ted@hvac20.com');
// $to = rawurlencode('eballer@rochester.rr.com');
$subject = 'Welcome to '.$settings->site_name;
$body = email_body('_email_new_user.php',$fields);
fwrite($log, $to);
email($to,$subject,$body);
