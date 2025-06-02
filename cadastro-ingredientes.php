<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Cadastrar Ingrediente</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;

        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(62%, 78%, 93%, 0.4);
            padding: 15px;
            border-radius: 15px;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;            
        }

        input{
            font-size: 15px;
            width: 75%;
            font: 15px;
            letter-spacing: 1px;
        }
        button{
            width: 100%;
            padding: 5px;
            margin: 5px;
            color: black;
            background-color: dodgerblue;
            border: none;
        }
    </style>

</head>
<body>
    <div class="box">
        <form action="scriptpro/inserir-ingredientes.php" method="POST">
            <fieldset>
                <legend><b>Novo ingrediente</b></legend><br>    
                        
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" id="codigo" autofocus require><br><br>
                    
                <label for="nome">Nome do Ingrediente:</label>        
                <input type="text" name="nome" id="nome" require><br><br>

                <label for="kcal">Quilocalorias (Kcal):</label>        
                <input type="decimal" name="kcal" id="kcal" require><br><br>

                <label for="carboidratos">Carboidratos (g):</label>        
                <input type="decimal" name="carboidratos" id="carboidratos" require><br><br>

                <label for="proteinas">Proteínas (g):</label>        
                <input type="decimal" name="proteinas" id="proteinas" require><br><br>

                <label for="gordurastotais">Gorduras Totais - Lipídios (g):</label>
                <input type="decimal" name="gordurastotais" id="gordurastotais" require><br><br>

                <label for="gordurassaturadas">Gorduras Saturadas (g):</label>       
                <input type="decimal" name="gordurassaturadas" id="gordurassaturadas" require><br><br>

                <label for="gordurastrans">Gorduras Trans (g):</label>        
                <input type="decimal" name="gordurastrans" id="gordurastrans" require><br><br>

                <label for="fibra">Fibra Alimentar (g):</label>        
                <input type="decimal" name="fibra" id="fibra" require><br><br>

                <label for="sodio">Sódio (mg):</label><br>        
                <input type="decimal" name="sodio" id="sodio" require><br><br>
                
                        
                <button type="submit" name="btn-cadastrar">Cadastrar</button>
                <button type="reset" name="btn-limpar">Limpar</button>
                    
            </fieldset>
        </form>
    </div>
</body>
</html>    
    
    
