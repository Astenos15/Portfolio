CREATE TABLE posts (
id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
title varchar(255) NOT NULL,
body text NOT NULL
);



<h1>Roasted Pork</h1>
<hr>
<h3>Ingredients</h3>
-1/4 cup extra-virgin olive oil <br>
-plus more for drizzling 4 thyme <br>
-minced garlic <br>
-plus 2 heads of garlic <br>
-chopped rosemary leaves 1/4 <br>
-teaspoon ground cumin 8 <br>
-lamb loin chops Salt <br>
-freshly ground black pepper <br>
-White Bean Puree <br>
<hr>
<h2>How To Make It</h2>
<h3>Step 1</h3>
In a large, shallow dish, combine the 1/4 cup of olive oil with the thyme, minced garlic, rosemary and cumin. Add the lamb chops and turn to coat with the marinade. Refrigerate overnight.

<h3>Step 2</h3>
Preheat the oven to 350°. Set the halved heads of garlic cut side up on a large sheet of foil and drizzle with oil. Wrap the garlic in the foil and roast for 1 hour, until tender.

<h3>Step3</h3>
Light a grill. Remove the chops from the marinade; discard the thyme and scrape off the garlic. Season the chops with salt and pepper and grill over moderate heat until lightly charred and medium-rare, 5 minutes per side. Serve the chops with the roasted garlic and White Bean Puree.


<td id="image_text" height="300px"><?php echo $row['image_text']; ?></td>


<div class="jumbotron col-lg-8" style="margin-right: 50px;">
	    <?php
	      $conn = mysqli_connect('localhost','root','', 'multi_login');
	     
	      echo "<form   method='POST' action='".setComments($conn)."'>
	            <input type='hidden' name='name'>
	            <input type='hidden' name='time' value='".date('Y-m-d H:i:s')."'>
	            <textarea name='comment'></textarea><br>
	            <button type='submit' name='commentSubmit'>Comment</button>
	            </form>";
	  
	      getComments($conn);
	      ?>
	</div>   