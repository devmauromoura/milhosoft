<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <div style="font-family: Verdana, Geneva, Tahoma, sans-serif; text-align: center; border: 1px solid #6C7A89; width: 450px;">
        <div style="border-bottom: 1px solid #6C7A89; padding: 10px; background-color: #00c853; color: #fff;">
            <b>Informativo MilhoAPP</b>
        </div>
        <div style="padding: 10px; font-size: 15px;">
            <h4> Seu cadastro foi realizado com sucesso. </h4>
            Cadastre sua senha de acesso através do link a seguir!
            <center>
                <div style="border: 1px solid black; width: 150px; margin: 10px 10px 30px 10px; border-radius: 20px; padding: 5px; background-color: #00c853;">
                    <a style="text-decoration: none; color: #fff;" href="http://localhost/public/cadastrarSenha/{{ $id }}" target="_blank" >Cadastrar Senha</a>
                </div>
            </center>
            Não responda este e-mail, o mesmo não é monitorado.          
        </div>
        <div style="border-top: 1px solid #6C7A89; padding: 10px; background-color: #00c853; color: #fff;">
            Equipe MilhoAPP
            <br>
            Contato.: contato.milhoapp@gmail.com
        </div>
    </div>

</body>
</html> 



