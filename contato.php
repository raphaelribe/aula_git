<html xmlns="http://www.w3.org/1999/html">
<head>
	<title> Contato</title>
</head>
<body>


<table>
	<tr>
		<td><?php include_once("menu.php"); ?> </td>
	</tr>
	<tr>
                <td><form>
                        <tr>
                            <td colspan="2" align="center"><h1>Faça contato </h1> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td align="right"><label>Nome: </label> </td>
                            <td><input type="text" name="nome" size="30" /></td>
                        </tr>
                        <tr>
                            <td align="right"><label>Email: </label> </td>
                            <td><input type="text" name="email" size="30" maxlength="30" /></td>
                        </tr>
                        <tr>
                            <td align="right"><label>Telefone: </label> </td>
                            <td><input type="text" name="telefone" size="30" /></td>
                        </tr>


                        <tr>
                            <td align="right"><label>Mensagem: </label> </td>
                            <td><textarea name="mensagem" rows="15" cols="60"> </textarea></td>
                        </tr>
                        <tr>
                            <td align="right"> </td>

                        </tr>

                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Enviar" /></td>
                        </tr>
                    </form>
                </td>


</body>
</html>
