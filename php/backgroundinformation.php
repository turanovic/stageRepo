<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Achtergrond informatie</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Styling -->
        <link href="../css/Style.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
        </head>
    <body>
        <?php
            include('../include/banner.inc.php');
        ?>

        

     <div class="container">
        <div class="col-md-4 col-md-offset-4 mainForm">
            
            <form id="form" class="form-horizontal">
                
                <br />
                <!-- question 1 using dropdownlist -->
                <h3>Wat is je leeftijd?</h3>
                <select>
                    <?php
                        for($i = 16; $i = < 100; $i++){
                            echo'<option value="' . $i . '">' . $i . '</option>'
                        }
                    ?>

                </select>



                <asp:DropDownList ID="ddlLeeftijd" class="form-control" runat="server"></asp:DropDownList>

                <br />
                <!-- question 2 using dropdownlist -->
                <h3>Wat is je geslacht?</h3>
                <asp:DropDownList ID="ddlGeslacht" class="form-control" runat="server"></asp:DropDownList>

                <br />
                <!-- question 3 using select and options -->
                <h3>Welke opleiding volg je?</h3>
                <asp:DropDownList ID="ddlOpleiding" class="form-control" runat="server">
                    <asp:ListItem>Geen</asp:ListItem>
                    <asp:ListItem>Administratief / Secretarieel</asp:ListItem>
                    <asp:ListItem>Design / AV-produktie / Theater</asp:ListItem>
                    <asp:ListItem>Bouw / Hout / Afwerkingstechniek</asp:ListItem>
                    <asp:ListItem>Elektro- / Installatie- / Proces- / Koudetechniek / Metaal</asp:ListItem>
                    <asp:ListItem>Economie</asp:ListItem>
                    <asp:ListItem>Handel/Verkoop</asp:ListItem>
                    <asp:ListItem>Entree Breed</asp:ListItem>
                    <asp:ListItem>Horeca / Toerisme</asp:ListItem>
                    <asp:ListItem>ICT</asp:ListItem>
                    <asp:ListItem>Juridisch</asp:ListItem>
                    <asp:ListItem>Sport</asp:ListItem>
                    <asp:ListItem>Techniek</asp:ListItem>
                    <asp:ListItem>Veiligheid / Veiligheid &amp; Techniek / Handhaving</asp:ListItem>
                    <asp:ListItem>Voertuigen / Transport en Logistiek </asp:ListItem>
                    <asp:ListItem>VAVO</asp:ListItem>
                    <asp:ListItem>Zorg &amp; Welzijn</asp:ListItem>
                </asp:DropDownList>
                <br />
                <!-- question 4 using dropdownlist -->
                <h3>In welke provincie woon je?</h3>
                <asp:DropDownList ID="ddlProvincie" class="form-control" runat="server"></asp:DropDownList>
  
                <br />
                <!-- question 5 using dropdownlist -->
                <h3>Wat is je nationaliteit?</h3>
                <asp:DropDownList ID="ddlNationaliteit" class="form-control" runat="server">
                    <asp:ListItem>Nederlands</asp:ListItem>
                    <asp:ListItem>Pools</asp:ListItem>
                    <asp:ListItem>Turkse</asp:ListItem>
                    <asp:ListItem>Duits</asp:ListItem>
                    <asp:ListItem>Brits</asp:ListItem>
                    <asp:ListItem>Marokkaans</asp:ListItem>
                    <asp:ListItem>Belgisch</asp:ListItem>
                    <asp:ListItem>Chinees</asp:ListItem>
                    <asp:ListItem>Italiaans</asp:ListItem>
                    <asp:ListItem>Spaans</asp:ListItem>
                    <asp:ListItem>Syrisch</asp:ListItem>
                </asp:DropDownList> 
                <br />

                <br />
                <div class="form-actions">
        <asp:Button ID="Button1" runat="server" Text="Volgende" onClick="Button1_Click"/>

                </div>

            </form>
        </div>
    </div>

    </body>
</html>
