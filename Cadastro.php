<html>
    <body>
        <form action="Resultados.php" method="POST" onsubmit="this.action='Resultados.php?nome=' + document.getElementById('nome').value">
            Nome:
            <input type="text" name="nome" id="nome">

            <br><br>

            Idade:
            <input type="number" name="idade">

            <br><br>

            Nota 1:
            <input type="number" name="nota1">

            <br><br>

            Nota 2:
            <input type="number" name="nota2">
    
            <br><br>

            Nota 3:
            <input type="number" name="nota3">

           <br><br>
            
            <input type="submit" value="enviar">

        </form>
    </body>
</html>