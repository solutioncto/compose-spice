<?php
// This file often teams up with during_user_creation.php although you can use that file without this one.
// However, if you add additional form fields here, you should process them there.
// We will do an example. Let's say you want to make use of the unused account_id column in the users table.

// Uncomment out the code below and it will automagically be inserted into your join form.
?>


<label for="source">Cell Phone Number *</label>
<input type="text" class="form-control" min="0" step="1" name="cell"
	value="<?php if (!empty($_POST['cell'])){echo htmlentities($_POST['cell']);}?>" required>
<p>
<label for="source">City *</label>
<input type="text" class="form-control" min="0" step="1" name="city"
	value="<?php if (!empty($_POST['city'])){echo htmlentities($_POST['city']);}?>" required>
<p>
<label for="source">State *</label>
<input type="text" class="form-control" min="0" step="1" name="state"
	value="<?php if (!empty($_POST['state'])){echo htmlentities($_POST['state']);}?>" required>
<p>
<label for="source">How did you hear about Home Performance 2.0?</label>
<input type="text" class="form-control" min="0" step="1" name="source"
	value="<?php if (!empty($_POST['source'])){echo htmlentities($_POST['source']);}?>" >

<label for="spark">What sparked your interest in HVAC 2.0?</label>
<input type="text" class="form-control" min="0" step="1" name="spark"
	value="<?php if (!empty($_POST['spark'])){echo htmlentities($_POST['spark']);}?>">
<p>
<label for="hvac">Are you an HVAC contractor?</label>
</br>
<i>The HVAC 2.0 program is specifically built for HVAC contractors. We'll accept non-HVAC companies on a case by case basis.</i>
</br>
	<input type="radio" name="hvac"
	<?php if (isset($_POST['hvac']) && $_POST['hvac']=="yes") echo "checked";?>
	value="yes">Yes
	<input type="radio" name="hvac"
	<?php if (isset($_POST['hvac']) && $_POST['hvac']=="no") echo "checked";?>
	value="no">No
</label>
</br></p>

<label for="hope">What are you hoping HVAC 2.0 can help you with?</label></br>
<label class="checkbox">
      <input type="checkbox" name="hope[]" value="better myself"
<?php if (!empty($_POST['hope']) && in_array("better myself", $_POST['hope']))
		echo 'checked="checked"';?>
	/> Want to better myself/be better than competition
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="hope[]" value="solve problems"
<?php if (!empty($_POST['hope']) && in_array("solve problems", $_POST['hope']))
		echo 'checked="checked"';?>
	/> Want to be able to solve more problems/have been frustrated by some unsolvable problems
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="hope[]" value="make money"
<?php if (!empty($_POST['hope']) && in_array("make money", $_POST['hope']))
		echo 'checked="checked"';?>
	/> Want to make more money
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="hope[]" value="sales process"
<?php if (!empty($_POST['hope']) && in_array("sales process", $_POST['hope']))
		echo 'checked="checked"';?>
	/> I'm looking for a repeatable sales process
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="hope[]" value="reduce blame"
<?php if (!empty($_POST['hope']) && in_array("reduce blame", $_POST['hope']))
		echo 'checked="checked"';?>
	/> Want to reduce getting blamed for things I can't control
    </label></br>
</label>
</br></p>

<label for="hope1">Which one of those is most important?</label></br>
<label class="radio">
      <input type="radio" name="hope1" value="better myself"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="better myself") echo " checked ";?>
	/> Want to better myself/be better than competition</br>
      <input type="radio" name="hope1" value="solve problems"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="solve problems") echo " checked ";?>
	/> Want to be able to solve more problems/have been frustrated by some unsolvable problems</br>
      <input type="radio" name="hope1" value="make money"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="make money") echo " checked ";?>
	/> Want to make more money</br>
      <input type="radio" name="hope1" value="sales process"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="sales process") echo " checked ";?>
	/> I'm looking for a repeatable sales process</br>
      <input type="radio" name="hope1" value="reduce blame"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="reduce blame") echo " checked ";?>
	/> Want to reduce getting blamed for things I can't control</br>
      <input type="radio" name="hope1" value="other"
	<?php if (isset($_POST['hope1']) && $_POST['hope1']=="other") echo " checked ";?>
	/> Other: 
      <input type="text" class="form-control" name="hope1other"
	value="<?php if (!empty($_POST['hope1other'])){echo htmlentities($_POST['hope1other']);}?>">
</label>
</br></p>

<label for="process">Does having a clearly defined sales process sound appealing?</label></br>
Not Appealing
<label class="inline-radio">
      <input type="radio" name="process" value="1"
	<?php if (isset($_POST['process']) && $_POST['process']=="1") echo " checked ";?>
	> 1
	</label>
<label class="inline-radio">
      <input type="radio" name="process" value="2"
	<?php if (isset($_POST['process']) && $_POST['process']=="2") echo " checked ";?>
	> 2
	</label>
<label class="inline-radio">
      <input type="radio" name="process" value="3"
	<?php if (isset($_POST['process']) && $_POST['process']=="3") echo " checked ";?>
	> 3
	</label>
<label class="inline-radio">
      <input type="radio" name="process" value="4"
	<?php if (isset($_POST['process']) && $_POST['process']=="4") echo " checked ";?>
	> 4
	</label>
<label class="inline-radio">
      <input type="radio" name="process" value="5"
	<?php if (isset($_POST['process']) && $_POST['process']=="5") echo " checked ";?>
	> 5
    </label>
<label class="inline-radio">
      <input type="radio" name="process" value="6"
	<?php if (isset($_POST['process']) && $_POST['process']=="6") echo " checked ";?>
	> 6
    </label>
<label class="inline-radio">
      <input type="radio" name="process" value="7"
	<?php if (isset($_POST['process']) && $_POST['process']=="7") echo " checked ";?>
	> 7
    </label>
<label class="inline-radio">
      <input type="radio" name="process" value="8"
	<?php if (isset($_POST['process']) && $_POST['process']=="8") echo " checked ";?>
	> 8
    </label>
<label class="inline-radio">
      <input type="radio" name="process" value="9"
	<?php if (isset($_POST['process']) && $_POST['process']=="9") echo " checked ";?>
	> 9
    </label>
<label class="inline-radio">
      <input type="radio" name="process" value="10"
	<?php if (isset($_POST['process']) && $_POST['process']=="10") echo " checked ";?>
	> 10
    </label>
Very Appealing
</label>
</br></p>

<label for="appeal">Why?</label>
<textarea class="form-control" min="0" step="1" name="appeal">
	<?php if (!empty($_POST['appeal'])){echo htmlentities($_POST['appeal']);}?>
</textarea>
</br></p>

<label for="script">How much would you like a scripted path to offer Home Performance services that a rookie could follow?</label></br>
Meh
<label class="inline-radio">
      <input type="radio" name="script" value="1"
	<?php if (isset($_POST['script']) && $_POST['script']=="1") echo " checked ";?>
	> 1
	</label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="2") echo " checked ";?>
	> 2
	</label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="3") echo " checked ";?>
	> 3
	</label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="4") echo " checked ";?>
	> 4
	</label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="5") echo " checked ";?>
	> 5
    </label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="6") echo " checked ";?>
	> 6
    </label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="7") echo " checked ";?>
	> 7
    </label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="8") echo " checked ";?>
	> 8
    </label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="9") echo " checked ";?>
	> 9
    </label>
<label class="inline-radio">
      <input type="radio" name="script" value="2"
	<?php if (isset($_POST['script']) && $_POST['script']=="10") echo " checked ";?>
	> 10
    </label>
Take my money!
</label><p>

<label for="size">What size is your company?</label></br>
<label class="inline-radio">
      <input type="radio" name="size" value="<1m"
	<?php if (isset($_POST['size']) && $_POST['size']=="<1m") echo " checked ";?>
	> $0-1 million/year
	</label>
<label class="inline-radio">
      <input type="radio" name="size" value="<3m"
	<?php if (isset($_POST['size']) && $_POST['size']=="<3m") echo " checked ";?>
	> $1-3 million/year
	</label>
<label class="inline-radio">
      <input type="radio" name="size" value="3+m"
	<?php if (isset($_POST['size']) && $_POST['size']=="3+m") echo " checked ";?>
	> $3+ million/year
	</label>
</label><p>

<label for="close">Do you know your closing ratio (Jobs done / Quotes given)? What is it?</label></br>
<label class="inline-radio">
      <input type="radio" name="close" value="no"
	<?php if (isset($_POST['close']) && $_POST['close']=="no") echo " checked ";?>
	> I don't track
	</label>
<label class="inline-radio">
      <input type="radio" name="close" value="0-20"
	<?php if (isset($_POST['close']) && $_POST['close']=="0-20") echo " checked ";?>
	> 0-20%
	</label>
<label class="inline-radio">
      <input type="radio" name="close" value="20-40"
	<?php if (isset($_POST['close']) && $_POST['close']=="20-40") echo " checked ";?>
	> 20-40%
	</label>
<label class="inline-radio">
      <input type="radio" name="close" value="40-60"
	<?php if (isset($_POST['close']) && $_POST['close']=="40-60") echo " checked ";?>
	> 40-60%
	</label>
<label class="inline-radio">
      <input type="radio" name="close" value="60-80"
	<?php if (isset($_POST['close']) && $_POST['close']=="60-80") echo " checked ";?>
	> 60-80%
	</label>
<label class="inline-radio">
      <input type="radio" name="close" value="80-100"
	<?php if (isset($_POST['close']) && $_POST['close']=="80-100") echo " checked ";?>
	> 80-100%
	</label>
</label>
</br><p>

<label for="blowerDoor">Do you have a blower door? *</label></br>
      <input type="radio" name="blowerDoor" value="yes"
	<?php if (isset($_POST['blowerDoor']) && $_POST['blowerDoor']=="yes") echo " checked ";?>
	> Yes (skip the next question)
      <input type="radio" name="blowerDoor" value="no"
	<?php if (isset($_POST['blowerDoor']) && $_POST['blowerDoor']=="no") echo " checked ";?>
	> No
</label>
</br><p>

<label for="blowerDoorOptions">If no, check all that apply:</label></br>
<label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="buy1"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("buy1", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I'm planning to buy a blower door within 1 month
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="buy3"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("buy3", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I'm planning to buy a blower door within 3 months
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="buy6"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("buy6", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I'm planning to buy a blower door within 6 months
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="sub"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("sub", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I'm willing to subcontract blower door testing
	</label></br>
    <label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="borrow"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("borrow", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I can borrow a blower door
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="blowerDoorOptions[]" value="no"
<?php if (!empty($_POST['blowerDoorOptions']) && in_array("no", $_POST['blowerDoorOptions']))
		echo 'checked="checked"';?>
	/> I do not plan to get a blower door
    </label></br>
</label><p>

<label for="loadCalc">Can you perform worst-case load calcs that include CFM50 leakage?</label></br>
      <input type="radio" name="loadCalc" value="yes"
	<?php if (isset($_POST['loadCalc']) && $_POST['loadCalc']=="yes") echo " checked ";?>
	> Yes
      <input type="radio" name="loadCalc" value="no"
	<?php if (isset($_POST['loadCalc']) && $_POST['loadCalc']=="no") echo " checked ";?>
	> No (skip the next questions)
</label>
</br><p>

<label for="tools">Which load calculation software do you use?</label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="none"
<?php if (!empty($_POST['tools']) && in_array("none", $_POST['tools']))
		echo 'checked="checked"';?>
	/> I don't use load calc software
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="wrightSoft"
<?php if (!empty($_POST['tools']) && in_array("wrightSoft", $_POST['tools']))
		echo 'checked="checked"';?>
	/> WrightSoft
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="coolCalc"
<?php if (!empty($_POST['tools']) && in_array("coolCalc", $_POST['tools']))
		echo 'checked="checked"';?>
	/> CoolCalc
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="manJ"
<?php if (!empty($_POST['tools']) && in_array("manJ", $_POST['tools']))
		echo 'checked="checked"';?>
	/> ManJ On Paper
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="auditor"
<?php if (!empty($_POST['tools']) && in_array("auditor", $_POST['tools']))
		echo 'checked="checked"';?>
	/> Energy Design Systems aka Auditor
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="tools[]" value="other"
<?php if (!empty($_POST['tools']) && in_array("other", $_POST['tools']))
		echo 'checked="checked"';?>
	/> Other: 
<input type="text" class="form-control" name="toolsOther"
	value="<?php if (!empty($_POST['toolsOther'])){echo htmlentities($_POST['toolsOther']);}?>">
    </label></br>
</label>
</br><p>

<label for="calcRun">What % of jobs do you run a load calc on?</label></br>
<label class="inline-radio">
      <input type="radio" name="calcRun" value="0-25"
	<?php if (isset($_POST['calcRun']) && $_POST['calcRun']=="0-25") echo " checked ";?>
	> 0-25%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcRun" value="26-50"
	<?php if (isset($_POST['calcRun']) && $_POST['calcRun']=="26-50") echo " checked ";?>
	> 26-50%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcRun" value="51-75"
	<?php if (isset($_POST['calcRun']) && $_POST['calcRun']=="51-75") echo " checked ";?>
	> 51-75%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcRun" value="76-100"
	<?php if (isset($_POST['calcRun']) && $_POST['calcRun']=="76-100") echo " checked ";?>
	> 76-100%
	</label>
</br><p>

<label for="calcComp">What % of jobs do <b>your competitors</b> run a load calc on?</label></br>
<label class="inline-radio">
      <input type="radio" name="calcComp" value="0-25"
	<?php if (isset($_POST['calcComp']) && $_POST['calcComp']=="0-25") echo " checked ";?>
	> 0-25%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcComp" value="26-50"
	<?php if (isset($_POST['calcComp']) && $_POST['calcComp']=="26-50") echo " checked ";?>
	> 26-50%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcComp" value="51-75"
	<?php if (isset($_POST['calcComp']) && $_POST['calcComp']=="51-75") echo " checked ";?>
	> 51-75%
	</label>
<label class="inline-radio">
      <input type="radio" name="calcComp" value="76-100"
	<?php if (isset($_POST['calcComp']) && $_POST['calcComp']=="76-100") echo " checked ";?>
	> 76-100%
	</label>
</br><p>

<label for="hope">I knew that I could give out free chapters of The Home Comfort Book with no strings.</label></br>
<i>Go here to get them! <a href="http://bit.ly/HVACContractorsChapters">http://bit.ly/HVACContractorsChapters</a> We also have canned emails for sending them out and encouraging homeowners to read them.
</i>
</br>
      <input type="radio" name="knew" value="yes"
	<?php if (isset($_POST['knew']) && $_POST['knew']=="yes") echo " checked ";?>
	> Yes
      <input type="radio" name="knew" value="no"
	<?php if (isset($_POST['knew']) && $_POST['knew']=="no") echo " checked ";?>
	> No
</label>
</br><p>

<label for="chapters">Have you read / listened to Home Comfort 101 or HVAC 101?</label></br>
<i>Videos: <a href="http://bit.ly/HCBChapterVideos">http://bit.ly/HCBChapterVideos</a> All chapters: <a href="http://bit.ly/ComfortGuides">http://bit.ly/ComfortGuides</a></i></br>
    <label class="checkbox">
      <input type="checkbox" name="chapters[]" value="hvac101"
<?php if (!empty($_POST['chapters']) && in_array("hvac101", $_POST['chapters']))
		echo 'checked="checked"';?>
	/> HVAC 101
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="chapters[]" value="comfort101"
<?php if (!empty($_POST['chapters']) && in_array("comfort101", $_POST['chapters']))
		echo 'checked="checked"';?>
	/> Home Comfort 101
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="chapters[]" value="comfortBook"
<?php if (!empty($_POST['chapters']) && in_array("comfortBook", $_POST['chapters']))
		echo 'checked="checked"';?>
	/> The whole Home Comfort book
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="chapters[]" value="none"
<?php if (!empty($_POST['chapters']) && in_array("none", $_POST['chapters']))
		echo 'checked="checked"';?>
	/> None of the above
    </label></br>
</label>
</br><p>

<label for="given">What chapters have you given away?</label></br>
    <label class="checkbox">
      <input type="checkbox" name="given[]" value="hvac101"
<?php if (!empty($_POST['given']) && in_array("hvac101", $_POST['given']))
		echo 'checked="checked"';?>
	/> HVAC 101
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="given[]" value="comfort101"
<?php if (!empty($_POST['given']) && in_array("comfort101", $_POST['given']))
		echo 'checked="checked"';?>
	/> Home Comfort 101
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="given[]" value="comfortBook"
<?php if (!empty($_POST['given']) && in_array("comfortBook", $_POST['given']))
		echo 'checked="checked"';?>
	/> The whole Home Comfort book
    </label></br>
    <label class="checkbox">
      <input type="checkbox" name="given[]" value="none"
<?php if (!empty($_POST['given']) && in_array("none", $_POST['given']))
		echo 'checked="checked"';?>
	/> None of the above
    </label></br>
</label>
</br><p>

<label for="readRate">How many clients read or scanned the chapters?</label></br>
<label class="inline-radio">
      <input type="radio" name="readRate" value="0-25"
	<?php if (isset($_POST['readRate']) && $_POST['readRate']=="0-25") echo " checked ";?>
	> 0-25%
	</label>
<label class="inline-radio">
      <input type="radio" name="readRate" value="26-50"
	<?php if (isset($_POST['readRate']) && $_POST['readRate']=="26-50") echo " checked ";?>
	> 26-50%
	</label>
<label class="inline-radio">
      <input type="radio" name="readRate" value="51-75"
	<?php if (isset($_POST['readRate']) && $_POST['readRate']=="51-75") echo " checked ";?>
	> 51-75%
	</label>
<label class="inline-radio">
      <input type="radio" name="readRate" value="76-100"
	<?php if (isset($_POST['readRate']) && $_POST['readRate']=="76-100") echo " checked ";?>
	> 76-100%
	</label>
</br><p>

<label for="feedback">What happened? How did they react? Did it help or hurt the sale?</label></br>
<i>
A story is required to get into the Monday night meetings and the advanced group. You'll be asked every week how many chapters you gave away and what feedback you got. They're integral to selling better equipment and making your work more fun/profitable.
</i>
<textarea class="form-control" min="0" step="1" name="feedback">
	<?php if (!empty($_POST['feedback'])){echo htmlentities($_POST['feedback']);}?>
</textarea>

<label for="ad">Where on your website do you advertise the free chapters?</label>
<input type="text" class="form-control" min="0" step="1" name="ad"
	value="<?php if (!empty($_POST['ad'])){echo htmlentities($_POST['ad']);}?>" >
</br><p>

<label for="commit">I will read or listen to "You Can't Teach a Kid to Ride a Bike at a Seminar". * </label></br>
<i>
HVAC 2.0 is based on the Sandler Sales System (which is all consultative, not pushy standard sales.) This book is the place to begin. You won't feel slimy using this system, it's all about educating and offering options.
<a href="https://amzn.to/2Qg1gik">Buy here</a>
</i>
</br>
	<input type="radio" name="commit"
	<?php if (isset($_POST['commit']) && $_POST['commit']=="yes") echo "checked";?>
	value="yes">Yes
	<input type="radio" name="commit"
	<?php if (isset($_POST['commit']) && $_POST['commit']=="no") echo "checked";?>
	value="no">No
