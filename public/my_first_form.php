<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>My First HTML Form</title>
			<meta charset="utf-8">
			<!--Leave a nice note-->
		</head>
			<body>
				<h2>User Login</h2>
                <form method="post" action="/my_first_form.php">
    				<p>
    				 	<label for="email"> Put yo email </label>

    				    <input id="email" name="email" placeholder="email" type="text" autofocus required>
    						<!--Remember autofocus its useful-->
    				</p>
    				<p>
    				    <label for="password"> Put yo password </label>
    				    <input id="password" name="password" placeholder="password" type="password" required>
    				
    				    <button type="submit"> login </button>
    				</p>
			
                
                </form>
            <h2>Mailing List</h2>
                <form>
                    <label for="mailing_list"> Sign Me UP! </label>
                    <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
                    <button> Send It</button>
                </form>
            <h2>Compose an Email</h2>
            <section class="email form">
                <form method="POST" action="/my_first_form.php" >
                    <p>
                        <label for="save_a_copy"> Do you want to save a copy to your sent folder?</label>
                        <input type="checkbox" id="save_a_copy" name="save_a_copy" value="yes">
                        <button> DO IT </button>

                    </p>
                   

                    <p>
                        <label for="to"> To </label>
                        <input id="to" name="to" placeholder="to" required>
                    </p>
                    <p>
                        <label for="from"> From</label>
                        <input id="from" name="from" placeholder="from" required>
                    </p>
                    <p>
                        <label for ="subject"> Subject</label>
                        <input id ="subject" name="subject" placeholder="subject">
                    </p>
                    <p>
                        <label for="email_body"> Body </label>
                        <textarea id="email_body" name="email_body" placeholder="email_body" rows="5" cols="40"> </textarea>

                    </p>
                    <p>
                        <button> Send </button>

                    </p>
                </form>
            </section>
            <h2>Multiple Choice Test</h2>
            <section>
                

                <form>
                  
                    <p>What is the harmonic minor of the key of A?</p>
                   <ul>
                      <li>  <label>
                            <input type="radio" name="q1" value="C">
                            C
                            </label>
                        </li>
                        <li> <label>
                        <input type="radio" name="q1" value="F#">
                        F#
                        </label>
                        </li> 
                        <li>    <label>
                        <input type="radio" name="q1" value="G">
                        G
                        </label>
                    </li>
                    
                    </ul>

                    <p>What is the worst instrument?</p>
                    <ul>
                        <li>
                            <label>
                                <input type="radio" name="q2" value="drums">
                                Drums
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="q2" value="sax">
                                Sax
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="q2" value="accordian">
                                Accordian
                            </label>
                        </li>
                    </ul>

                    <p>What are all the answers?</p>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="q3[]" value="beer">
                                    Beer
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="q3[]" value="more beer">
                                    More Beer
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="q3[]" value="even more beer">
                                    Even More Beer!
                                <label>
                            </li>
                        </ul>

                    <label for="lunch"> What's for lunch?</label>
                    <select id="lunch" name="lunch[]" multiple>
                        <option value="beer"> Beer</option>
                        <option value="bacon"> Bacon</option>
                        <option value="bbq"> Barbecue</option>
                    </select>

 
                    <button> Submit </button>


                </form>

            </section>
            <section>
                
                <h2>Select Testing</h2>
                <form>
                    <label for="beer"> Do you like beer?</label>
                    <select id="beer" name="beer">
                        <option value="0">yes</option>
                        <option value="1">no</option>
                    </select>
                    <button>Submit</button>

                </form>
            </section>  
			</body>
	</html>