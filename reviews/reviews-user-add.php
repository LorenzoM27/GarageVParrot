<section>
    <?php
        if (isset($_REQUEST['name'], $_REQUEST['score'], $_REQUEST['display'], $_REQUEST['message'])){
                
            $name = strip_tags($_REQUEST['name']);
            $name = mysqli_real_escape_string($conn, $name);
                    
            $score = strip_tags($_REQUEST['score']); 
            $score = mysqli_real_escape_string($conn, $score);
                    
            $display = strip_tags($_REQUEST['display']);
            $display = mysqli_real_escape_string($conn, $display);

            $message = strip_tags($_REQUEST['message']);
            $message = mysqli_real_escape_string($conn, $message);
                    
            $query = "INSERT into `reviews` ( name, score, display, message)
                VALUES ('$name', '$score', '$display', '$message')";
                $res = mysqli_query($conn, $query);
        }
    ?>
    <div class="form">
         <form class="form" action="" method="post">
            <h2>Ajouter un avis</h2>
            <label>Nom :</label>
            <input type="text" name="name" placeholder="Nom" required />
            <label>Note : </label>
            <input type="text" name="score" placeholder="Déçu, peu satisfait, satisfait, très satisfait.." required/>
            <input type="hidden" name="display" value="non" required />
            <label>Mon message: </label>
            <textarea name="message" placeholder="Mon message" required></textarea>
            <input type="submit" class="button" name="submit" value="Je donne mon avis" required/>
        </form>
    </div>
</section>