<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="cadastra_cliente.php" method="post">
            <fieldset>
                <legend id="titulo">Formulário de Cadastro dos Clientes</legend>
                    
                            
                        <div class="grupo">
                            <label>Login</label>
                            <input required class="controle" type="text" name="login" id="login">
                        </div>
                            
                        <div class="grupo">
                            <label>Senha</label>
                            <input required class="controle" type="password" name="senha" id="senha">
                        </div> 
                    
                    <div class="grupo">
                        <label>Nome</label>
                        <input required class="controle" type="text" name="nome" id="nome">
                    </div>
                        
                    <div class="grupo">
                        <label>Sobrenome</label>
                        <input required class="controle" type="text" name="sobrenome" id="sobrenome">
                    </div>   
                                          
                    <div class="grupo">
                        <label>RG</label>
                        <input required class="controle" type="number" name="rg" id="rg">
                    </div>
                        
                    <div class="grupo">
                        <label>CPF</label>
                        <input required class="controle" type="number" name="cpf" id="cpf">
                    </div>
                        
                    <div class="grupo">
                        <label>Telefone</label>
                        <input required class="controle" type="number" name="telefone" id="telefone">
                    </div>   
                        
                    <div class="grupo">
                        <label>Celular</label>
                        <input required class="controle" type="number" name="celular" id="celular">
                    </div>
                        
                    <div class="grupo">
                        <label>E-mail</label>
                        <input required class="controle" type="text" name="email" id="e-mail">
                    </div>
                        
                    <div class="grupo">
                        <label>Cidade</label>
                        <input required class="controle" type="text" name="cidade" id="cidade">
                    </div>
                        
                    <div class="grupo">
                        <label>Tipo Logradouro</label>
                        <input required class="controle" type="text" name="tipo_logradouro" id="tipo_logradouro">
                    </div>
                                                             
                    <div class="grupo">
                        <label>Logradouro</label>
                        <input required class="controle" type="text" name="logradouro" id="logradouro">
                    </div>
                        
                    <div class="grupo">
                        <label>CEP</label>
                        <input required class="controle" type="number" name="cep" id="cep">
                    </div>       
                        
                    <div id="grupo">                            
                    <div class="botao">
                        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                    </div>
                        
                   
                    
                
            </fieldset>  
            
            <!--Estilos -->
            
            <style>
                #titulo{
                   text-align: center;
                   font-size: 25px;
                   padding: auto;
                   display: inline;
                   margin: 15px;
                   font-family: verdana;
                   
                }
                .grupo label{
                   font-family: verdana;
                   margin: 7px;
                   font-size: 12px;
                   display: inline-block;
                   vertical-align: center;
                   display: inline-block;
                   text-align: right;
                   width: 25%
                    
                   
                }
                .controle{
                    margin: 6px;
                    padding: 3px;
                    width: 50%
                    
                }
                .botao{
                    text-align: center;
                    width: auto;
                }
                .separacao{
                    text-align:center;
                }
              

            </style>
            
        </form>
            </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

