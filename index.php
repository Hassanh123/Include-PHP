<?php //Vereis hier dat functions.php wordt ingeladen
require "functions.php"
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Opdracht3 include</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>

        <h1> Welkom op mijn webpagina!</h1>
            <?php //Zorg dat hier de header.php wordt ingeladen 
             include "header.php";
            
            
            ?>
            <article>
                <p>
                    <?php //Maak hier gebruik van de functie calculateAge uit functies.php en geef hieraan je eigen geboortedatum mee 
                    
                  echo calculateAge("27-09-2001")

                    ?>
                </p>
                <p>
                    <?php //Maak hier gebruik van je zelfgemaakte functie. 
                           $intstart = 1;
                           $intend = 50;
                           
            
                        echo "Your lucky number is :" . luckynumber($intstart, $intend);
                    ?>
                </p>
            </article>
            <?php //Zorg dat hier de footer.php wordt ingeladen
            include "footer.php";
            ?>
        </body>
    </html>