<html>
    <head>
        <title>Contacto</title>
    </head>
    <body>
        <h1>Contacto</h1>
        <div>
            <form action="saveContact.php" method="post" name="frm_contact" id="frm_contact">
                <div class="groupFrm">
                    <label>Nombre:</label>
                    <input type="text" name="txtName" value="" placeholder="Ingrese su nombre"/>
                </div>
                <div class="groupFrm">
                    <label>Telefono:</label>
                    <input type="phone" name="txtPhone" value="" placeholder="Ingrese un numero telefonico"/>
                </div>
                <div class="groupFrm">
                    <label>Email:</label>
                    <input type="mailss" name="txtEmail" value="" placeholder="Ingrese un correo electronico"/>
                </div>
                <div class="groupFrm">
                    <label>Empresa:</label>
                    <input type="text" name="txtCompany" value="" placeholder="Ingrese el nombre la empresa"/>
                </div>
                <div class="groupArea">
                    <label>Comentarios:</label>
                    <textarea name="txtComment" placeholder="Ingrese su comentario"></textarea>
                </div>
                <div class="groupBtn">
                    <button name="btnSend">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>

